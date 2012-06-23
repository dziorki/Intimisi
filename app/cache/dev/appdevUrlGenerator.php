<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'notowania' => true,
       'profil' => true,
       'statystyki' => true,
       'kalkulator' => true,
       'komunikaty' => true,
       'pomoc' => true,
       'portfele' => true,
       'wycena' => true,
       'ulubieni' => true,
       'ulubieni_show' => true,
       'ulubieni_new' => true,
       'ulubieni_create' => true,
       'ulubieni_edit' => true,
       'ulubieni_update' => true,
       'ulubieni_delete' => true,
       'portfel' => true,
       'portfel_history' => true,
       'portfel_show' => true,
       'portfel_kup' => true,
       'portfel_sprzedaj' => true,
       'portfel_create' => true,
       'portfel_edit' => true,
       'portfel_update' => true,
       'portfel_delete' => true,
       'ustawienia' => true,
       'ustawienia_update_prowizja' => true,
       'ustawienia_update' => true,
       'aktualnosci' => true,
       'aktualnosci_show' => true,
       'aktualnosci_new' => true,
       'aktualnosci_create' => true,
       'aktualnosci_edit' => true,
       'aktualnosci_update' => true,
       'aktualnosci_delete' => true,
       'index' => true,
       'login' => true,
       'login_check' => true,
       'logout' => true,
       'register' => true,
       'create' => true,
       'sonata_user_impersonating' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'sonata_admin_set_object_field_value' => true,
       'admin_intimisi_klient_aktualnosci_list' => true,
       'admin_intimisi_klient_aktualnosci_create' => true,
       'admin_intimisi_klient_aktualnosci_batch' => true,
       'admin_intimisi_klient_aktualnosci_edit' => true,
       'admin_intimisi_klient_aktualnosci_delete' => true,
       'admin_intimisi_klient_aktualnosci_show' => true,
       'admin_intimisi_klient_aktualnosci_export' => true,
       'admin_intimisi_klient_notowania_list' => true,
       'admin_intimisi_klient_notowania_create' => true,
       'admin_intimisi_klient_notowania_batch' => true,
       'admin_intimisi_klient_notowania_edit' => true,
       'admin_intimisi_klient_notowania_delete' => true,
       'admin_intimisi_klient_notowania_show' => true,
       'admin_intimisi_klient_notowania_export' => true,
       'admin_intimisi_user_user_list' => true,
       'admin_intimisi_user_user_create' => true,
       'admin_intimisi_user_user_batch' => true,
       'admin_intimisi_user_user_edit' => true,
       'admin_intimisi_user_user_delete' => true,
       'admin_intimisi_user_user_show' => true,
       'admin_intimisi_user_user_export' => true,
       'admin_intimisi_user_group_list' => true,
       'admin_intimisi_user_group_create' => true,
       'admin_intimisi_user_group_batch' => true,
       'admin_intimisi_user_group_edit' => true,
       'admin_intimisi_user_group_delete' => true,
       'admin_intimisi_user_group_show' => true,
       'admin_intimisi_user_group_export' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getnotowaniaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\NotowaniaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/notowania',  ),));
    }

    private function getprofilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profil',  ),));
    }

    private function getstatystykiRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/statystyki',  ),));
    }

    private function getkalkulatorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/kalkulator',  ),));
    }

    private function getkomunikatyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/komunikaty',  ),));
    }

    private function getpomocRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PomocController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pomoc',  ),));
    }

    private function getportfeleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfeleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/portfele',  ),));
    }

    private function getwycenaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\WycenaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wycena',  ),));
    }

    private function getulubieniRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ulubieni/',  ),));
    }

    private function getulubieni_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ulubieni',  ),));
    }

    private function getulubieni_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ulubieni/new',  ),));
    }

    private function getulubieni_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/ulubieni/create',  ),));
    }

    private function getulubieni_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ulubieni',  ),));
    }

    private function getulubieni_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ulubieni',  ),));
    }

    private function getulubieni_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ulubieni',  ),));
    }

    private function getportfelRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/portfel/',  ),));
    }

    private function getportfel_historyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::historyAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/portfel/history',  ),));
    }

    private function getportfel_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/portfel',  ),));
    }

    private function getportfel_kupRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::kupAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/portfel/kup',  ),));
    }

    private function getportfel_sprzedajRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::sprzedajAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/portfel/sprzedaj',  ),));
    }

    private function getportfel_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/portfel/create',  ),));
    }

    private function getportfel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/portfel',  ),));
    }

    private function getportfel_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/portfel',  ),));
    }

    private function getportfel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/portfel',  ),));
    }

    private function getustawieniaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ustawienia/',  ),));
    }

    private function getustawienia_update_prowizjaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::updateProwizjaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ustawienia/update_prowizja',  ),));
    }

    private function getustawienia_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ustawienia/update',  ),));
    }

    private function getaktualnosciRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/aktualnosci/',  ),));
    }

    private function getaktualnosci_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/aktualnosci',  ),));
    }

    private function getaktualnosci_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/aktualnosci/new',  ),));
    }

    private function getaktualnosci_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/aktualnosci/create',  ),));
    }

    private function getaktualnosci_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/aktualnosci',  ),));
    }

    private function getaktualnosci_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/aktualnosci',  ),));
    }

    private function getaktualnosci_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/aktualnosci',  ),));
    }

    private function getindexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\LoginController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\LoginController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getregisterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register',  ),));
    }

    private function getcreateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\RegistrationController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/create',  ),));
    }

    private function getsonata_user_impersonatingRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getsonata_admin_set_object_field_valueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/set-object-field-value',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci/list',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci/create',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci/batch',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci',  ),));
    }

    private function getadmin_intimisi_klient_aktualnosci_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/aktualnosci/export',  ),));
    }

    private function getadmin_intimisi_klient_notowania_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania/list',  ),));
    }

    private function getadmin_intimisi_klient_notowania_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania/create',  ),));
    }

    private function getadmin_intimisi_klient_notowania_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania/batch',  ),));
    }

    private function getadmin_intimisi_klient_notowania_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania',  ),));
    }

    private function getadmin_intimisi_klient_notowania_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania',  ),));
    }

    private function getadmin_intimisi_klient_notowania_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania',  ),));
    }

    private function getadmin_intimisi_klient_notowania_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/klient/notowania/export',  ),));
    }

    private function getadmin_intimisi_user_user_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user/list',  ),));
    }

    private function getadmin_intimisi_user_user_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user/create',  ),));
    }

    private function getadmin_intimisi_user_user_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user/batch',  ),));
    }

    private function getadmin_intimisi_user_user_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user',  ),));
    }

    private function getadmin_intimisi_user_user_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user',  ),));
    }

    private function getadmin_intimisi_user_user_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user',  ),));
    }

    private function getadmin_intimisi_user_user_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/user/export',  ),));
    }

    private function getadmin_intimisi_user_group_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group/list',  ),));
    }

    private function getadmin_intimisi_user_group_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group/create',  ),));
    }

    private function getadmin_intimisi_user_group_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group/batch',  ),));
    }

    private function getadmin_intimisi_user_group_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group',  ),));
    }

    private function getadmin_intimisi_user_group_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group',  ),));
    }

    private function getadmin_intimisi_user_group_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group',  ),));
    }

    private function getadmin_intimisi_user_group_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/intimisi/user/group/export',  ),));
    }
}
