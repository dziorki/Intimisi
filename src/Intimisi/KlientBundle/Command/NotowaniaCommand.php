<?php

namespace Intimisi\KlientBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use EasyCSV\Reader;
use Intimisi\KlientBundle\Entity\Notowania;
use Doctrine\ORM\EntityRepository;

class NotowaniaCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('intimisi:klient:notowania')
                ->setDescription('Importuje notowania z pliku CSV do bazy danych')
                ->addArgument('path');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {


        $fileName = $input->getArgument('path');
        $fileTab = @file('http://gielda.onet.pl/indeksy-i-akcje,18633,101,100,notowania-csv-drukuj.csv');

        foreach ($fileTab as $line) {
            if (strlen(trim($line)))
                $csvFile[] = $line;
        }

        $csvFile[0] = '52min;52max;czas;nazwa;kurs_biezacy;zmiana_procentowa;zmiana_kwotowa;kurs_odniesienia;kurs_otwarcia;kurs_min;kurs_max;wolumen;obrot;' . PHP_EOL;
        file_put_contents($fileName, $csvFile);
        $csvReader = new Reader($fileName);

        $csv = $csvReader->getAll();

        foreach ($csv as $row) {

            $em = $this->getContainer()->get('doctrine')->getEntityManager();

            $notowanie = $em->getRepository('Intimisi\KlientBundle\Entity\Notowania')->findOneBy(array('nazwa' => $row['nazwa']));
            
            $kurs_biezacy =         str_replace(',','.', $row['kurs_biezacy'])*100;
            $kurs_max =             str_replace(',','.', $row['kurs_max'])*100;
            $kurs_min =             str_replace(',','.', $row['kurs_min'])*100;
            $kurs_odniesienia =     str_replace(',','.', $row['kurs_odniesienia'])*100;
            $kurs_otwarcia =        str_replace(',','.', $row['kurs_otwarcia'])*100;
            $nazwa =                $row['nazwa'];
            $obrot =                str_replace('.','',$row['obrot']);
            $wolumen =              str_replace(' ','', $row['wolumen']);
            $zmiana_procentowa =    str_replace(',','.', $row['zmiana_procentowa'])*100;
            $zmiana_kwotowa =       str_replace(',','.', $row['zmiana_kwotowa'])*100;
            
            
            
            if (!empty($notowanie)) {
                
                $notowanie->setCzas(            new \DateTime('now'));
                $notowanie->setKursBiezacy(     $kurs_biezacy);
                $notowanie->setKursMax(         $kurs_max);
                $notowanie->setKursMin(         $kurs_min);
                $notowanie->setKursOdniesienia( $kurs_odniesienia);
                $notowanie->setKursOtwarcia(    $kurs_otwarcia);
                $notowanie->setNazwa(           $nazwa);
                $notowanie->setObrot(           $obrot);
                $notowanie->setWolumen(         $wolumen);
                $notowanie->setZmianaProcentowa($zmiana_procentowa);
                $notowanie->setZmianaKwotowa(   $zmiana_kwotowa);
                $em->persist($notowanie);
                $em->flush();
            } else {
                
                
                $notowania = new Notowania();
                $notowania->setCzas(            new \DateTime('now'));
                $notowania->setKursBiezacy(     $kurs_biezacy);
                $notowania->setKursMax(         $kurs_max);
                $notowania->setKursMin(         $kurs_min);
                $notowania->setKursOdniesienia( $kurs_odniesienia);
                $notowania->setKursOtwarcia(    $kurs_otwarcia);
                $notowania->setNazwa(           $nazwa);
                $notowania->setObrot(           $obrot);
                $notowania->setWolumen(         $wolumen);
                $notowania->setZmianaProcentowa($zmiana_procentowa);
                $notowania->setZmianaKwotowa(   $zmiana_kwotowa);
                $em->persist($notowania);
                $em->flush();
            }
        }
        
        
        
        $output->writeln("Uaktualniono rekordy w bazie");
        
    }

}
