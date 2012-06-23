<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // notowania
        if ($pathinfo === '/notowania') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\NotowaniaController::indexAction',  '_route' => 'notowania',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',  '_route' => 'profil',);
        }

        // statystyki
        if ($pathinfo === '/statystyki') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',  '_route' => 'statystyki',);
        }

        // kalkulator
        if ($pathinfo === '/kalkulator') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',  '_route' => 'kalkulator',);
        }

        // komunikaty
        if ($pathinfo === '/komunikaty') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\ProfilController::indexAction',  '_route' => 'komunikaty',);
        }

        // pomoc
        if ($pathinfo === '/pomoc') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PomocController::indexAction',  '_route' => 'pomoc',);
        }

        // portfele
        if ($pathinfo === '/portfele') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfeleController::indexAction',  '_route' => 'portfele',);
        }

        // wycena
        if ($pathinfo === '/wycena') {
            return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\WycenaController::indexAction',  '_route' => 'wycena',);
        }

        if (0 === strpos($pathinfo, '/ulubieni')) {
            // ulubieni
            if (rtrim($pathinfo, '/') === '/ulubieni') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ulubieni');
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::indexAction',  '_route' => 'ulubieni',);
            }

            // ulubieni_show
            if (preg_match('#^/ulubieni/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::showAction',)), array('_route' => 'ulubieni_show'));
            }

            // ulubieni_new
            if ($pathinfo === '/ulubieni/new') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::newAction',  '_route' => 'ulubieni_new',);
            }

            // ulubieni_create
            if ($pathinfo === '/ulubieni/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ulubieni_create;
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::createAction',  '_route' => 'ulubieni_create',);
            }
            not_ulubieni_create:

            // ulubieni_edit
            if (preg_match('#^/ulubieni/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::editAction',)), array('_route' => 'ulubieni_edit'));
            }

            // ulubieni_update
            if (preg_match('#^/ulubieni/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ulubieni_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::updateAction',)), array('_route' => 'ulubieni_update'));
            }
            not_ulubieni_update:

            // ulubieni_delete
            if (preg_match('#^/ulubieni/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ulubieni_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UlubieniController::deleteAction',)), array('_route' => 'ulubieni_delete'));
            }
            not_ulubieni_delete:

        }

        if (0 === strpos($pathinfo, '/portfel')) {
            // portfel
            if (rtrim($pathinfo, '/') === '/portfel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'portfel');
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::indexAction',  '_route' => 'portfel',);
            }

            // portfel_history
            if ($pathinfo === '/portfel/history') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::historyAction',  '_route' => 'portfel_history',);
            }

            // portfel_show
            if (preg_match('#^/portfel/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::showAction',)), array('_route' => 'portfel_show'));
            }

            // portfel_kup
            if ($pathinfo === '/portfel/kup') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::kupAction',  '_route' => 'portfel_kup',);
            }

            // portfel_sprzedaj
            if ($pathinfo === '/portfel/sprzedaj') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::sprzedajAction',  '_route' => 'portfel_sprzedaj',);
            }

            // portfel_create
            if ($pathinfo === '/portfel/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_portfel_create;
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::createAction',  '_route' => 'portfel_create',);
            }
            not_portfel_create:

            // portfel_edit
            if (preg_match('#^/portfel/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::editAction',)), array('_route' => 'portfel_edit'));
            }

            // portfel_update
            if (preg_match('#^/portfel/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_portfel_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::updateAction',)), array('_route' => 'portfel_update'));
            }
            not_portfel_update:

            // portfel_delete
            if (preg_match('#^/portfel/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_portfel_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\PortfelController::deleteAction',)), array('_route' => 'portfel_delete'));
            }
            not_portfel_delete:

        }

        if (0 === strpos($pathinfo, '/ustawienia')) {
            // ustawienia
            if (rtrim($pathinfo, '/') === '/ustawienia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ustawienia');
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::indexAction',  '_route' => 'ustawienia',);
            }

            // ustawienia_update_prowizja
            if ($pathinfo === '/ustawienia/update_prowizja') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::updateProwizjaAction',  '_route' => 'ustawienia_update_prowizja',);
            }

            // ustawienia_update
            if ($pathinfo === '/ustawienia/update') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\UstawieniaController::updateAction',  '_route' => 'ustawienia_update',);
            }

        }

        if (0 === strpos($pathinfo, '/aktualnosci')) {
            // aktualnosci
            if (rtrim($pathinfo, '/') === '/aktualnosci') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aktualnosci');
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::indexAction',  '_route' => 'aktualnosci',);
            }

            // aktualnosci_show
            if (preg_match('#^/aktualnosci/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::showAction',)), array('_route' => 'aktualnosci_show'));
            }

            // aktualnosci_new
            if ($pathinfo === '/aktualnosci/new') {
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::newAction',  '_route' => 'aktualnosci_new',);
            }

            // aktualnosci_create
            if ($pathinfo === '/aktualnosci/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aktualnosci_create;
                }
                return array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::createAction',  '_route' => 'aktualnosci_create',);
            }
            not_aktualnosci_create:

            // aktualnosci_edit
            if (preg_match('#^/aktualnosci/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::editAction',)), array('_route' => 'aktualnosci_edit'));
            }

            // aktualnosci_update
            if (preg_match('#^/aktualnosci/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aktualnosci_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::updateAction',)), array('_route' => 'aktualnosci_update'));
            }
            not_aktualnosci_update:

            // aktualnosci_delete
            if (preg_match('#^/aktualnosci/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_aktualnosci_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Intimisi\\KlientBundle\\Controller\\AktualnosciController::deleteAction',)), array('_route' => 'aktualnosci_delete'));
            }
            not_aktualnosci_delete:

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }
            return array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\LoginController::indexAction',  '_route' => 'index',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        // create
        if ($pathinfo === '/register/create') {
            return array (  '_controller' => 'Intimisi\\UserBundle\\Controller\\RegistrationController::createAction',  '_route' => 'create',);
        }

        // sonata_user_impersonating
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_user_impersonating',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_dashboard');
                }
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // sonata_admin_set_object_field_value
            if ($pathinfo === '/admin/core/set-object-field-value') {
                return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
            }

            // admin_intimisi_klient_aktualnosci_list
            if ($pathinfo === '/admin/intimisi/klient/aktualnosci/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_list',  '_route' => 'admin_intimisi_klient_aktualnosci_list',);
            }

            // admin_intimisi_klient_aktualnosci_create
            if ($pathinfo === '/admin/intimisi/klient/aktualnosci/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_create',  '_route' => 'admin_intimisi_klient_aktualnosci_create',);
            }

            // admin_intimisi_klient_aktualnosci_batch
            if ($pathinfo === '/admin/intimisi/klient/aktualnosci/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_batch',  '_route' => 'admin_intimisi_klient_aktualnosci_batch',);
            }

            // admin_intimisi_klient_aktualnosci_edit
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/aktualnosci') && preg_match('#^/admin/intimisi/klient/aktualnosci/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_edit',)), array('_route' => 'admin_intimisi_klient_aktualnosci_edit'));
            }

            // admin_intimisi_klient_aktualnosci_delete
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/aktualnosci') && preg_match('#^/admin/intimisi/klient/aktualnosci/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_delete',)), array('_route' => 'admin_intimisi_klient_aktualnosci_delete'));
            }

            // admin_intimisi_klient_aktualnosci_show
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/aktualnosci') && preg_match('#^/admin/intimisi/klient/aktualnosci/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_show',)), array('_route' => 'admin_intimisi_klient_aktualnosci_show'));
            }

            // admin_intimisi_klient_aktualnosci_export
            if ($pathinfo === '/admin/intimisi/klient/aktualnosci/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.aktualnosci',  '_sonata_name' => 'admin_intimisi_klient_aktualnosci_export',  '_route' => 'admin_intimisi_klient_aktualnosci_export',);
            }

            // admin_intimisi_klient_notowania_list
            if ($pathinfo === '/admin/intimisi/klient/notowania/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_list',  '_route' => 'admin_intimisi_klient_notowania_list',);
            }

            // admin_intimisi_klient_notowania_create
            if ($pathinfo === '/admin/intimisi/klient/notowania/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_create',  '_route' => 'admin_intimisi_klient_notowania_create',);
            }

            // admin_intimisi_klient_notowania_batch
            if ($pathinfo === '/admin/intimisi/klient/notowania/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_batch',  '_route' => 'admin_intimisi_klient_notowania_batch',);
            }

            // admin_intimisi_klient_notowania_edit
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/notowania') && preg_match('#^/admin/intimisi/klient/notowania/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_edit',)), array('_route' => 'admin_intimisi_klient_notowania_edit'));
            }

            // admin_intimisi_klient_notowania_delete
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/notowania') && preg_match('#^/admin/intimisi/klient/notowania/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_delete',)), array('_route' => 'admin_intimisi_klient_notowania_delete'));
            }

            // admin_intimisi_klient_notowania_show
            if (0 === strpos($pathinfo, '/admin/intimisi/klient/notowania') && preg_match('#^/admin/intimisi/klient/notowania/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_show',)), array('_route' => 'admin_intimisi_klient_notowania_show'));
            }

            // admin_intimisi_klient_notowania_export
            if ($pathinfo === '/admin/intimisi/klient/notowania/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.notowania',  '_sonata_name' => 'admin_intimisi_klient_notowania_export',  '_route' => 'admin_intimisi_klient_notowania_export',);
            }

            // admin_intimisi_user_user_list
            if ($pathinfo === '/admin/intimisi/user/user/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_list',  '_route' => 'admin_intimisi_user_user_list',);
            }

            // admin_intimisi_user_user_create
            if ($pathinfo === '/admin/intimisi/user/user/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_create',  '_route' => 'admin_intimisi_user_user_create',);
            }

            // admin_intimisi_user_user_batch
            if ($pathinfo === '/admin/intimisi/user/user/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_batch',  '_route' => 'admin_intimisi_user_user_batch',);
            }

            // admin_intimisi_user_user_edit
            if (0 === strpos($pathinfo, '/admin/intimisi/user/user') && preg_match('#^/admin/intimisi/user/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_edit',)), array('_route' => 'admin_intimisi_user_user_edit'));
            }

            // admin_intimisi_user_user_delete
            if (0 === strpos($pathinfo, '/admin/intimisi/user/user') && preg_match('#^/admin/intimisi/user/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_delete',)), array('_route' => 'admin_intimisi_user_user_delete'));
            }

            // admin_intimisi_user_user_show
            if (0 === strpos($pathinfo, '/admin/intimisi/user/user') && preg_match('#^/admin/intimisi/user/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_show',)), array('_route' => 'admin_intimisi_user_user_show'));
            }

            // admin_intimisi_user_user_export
            if ($pathinfo === '/admin/intimisi/user/user/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_intimisi_user_user_export',  '_route' => 'admin_intimisi_user_user_export',);
            }

            // admin_intimisi_user_group_list
            if ($pathinfo === '/admin/intimisi/user/group/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_list',  '_route' => 'admin_intimisi_user_group_list',);
            }

            // admin_intimisi_user_group_create
            if ($pathinfo === '/admin/intimisi/user/group/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_create',  '_route' => 'admin_intimisi_user_group_create',);
            }

            // admin_intimisi_user_group_batch
            if ($pathinfo === '/admin/intimisi/user/group/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_batch',  '_route' => 'admin_intimisi_user_group_batch',);
            }

            // admin_intimisi_user_group_edit
            if (0 === strpos($pathinfo, '/admin/intimisi/user/group') && preg_match('#^/admin/intimisi/user/group/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_edit',)), array('_route' => 'admin_intimisi_user_group_edit'));
            }

            // admin_intimisi_user_group_delete
            if (0 === strpos($pathinfo, '/admin/intimisi/user/group') && preg_match('#^/admin/intimisi/user/group/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_delete',)), array('_route' => 'admin_intimisi_user_group_delete'));
            }

            // admin_intimisi_user_group_show
            if (0 === strpos($pathinfo, '/admin/intimisi/user/group') && preg_match('#^/admin/intimisi/user/group/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_show',)), array('_route' => 'admin_intimisi_user_group_show'));
            }

            // admin_intimisi_user_group_export
            if ($pathinfo === '/admin/intimisi/user/group/export') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_intimisi_user_group_export',  '_route' => 'admin_intimisi_user_group_export',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
