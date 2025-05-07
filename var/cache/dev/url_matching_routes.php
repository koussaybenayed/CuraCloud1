<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/doctor/appointment' => [[['_route' => 'admin_app_appointment_index', '_controller' => 'App\\Controller\\AppointmentController::indexadmin'], null, ['GET' => 0], null, false, false, null]],
        '/doctor/appointment/new' => [[['_route' => 'admin_app_appointment_new', '_controller' => 'App\\Controller\\AppointmentController::newadmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/appointment' => [[['_route' => 'user_app_appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar' => [[['_route' => 'admin_appointment_calendar', '_controller' => 'App\\Controller\\AppointmentController::calendar'], null, ['GET' => 0], null, false, false, null]],
        '/doctors/list' => [[['_route' => 'doctors_list', '_controller' => 'App\\Controller\\AppointmentController::doctorsList'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/bilan' => [[['_route' => 'app_bilan_index', '_controller' => 'App\\Controller\\BilanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bilan/index2' => [[['_route' => 'app_bilan_index2', '_controller' => 'App\\Controller\\BilanController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/bilan/new' => [[['_route' => 'app_bilan_new', '_controller' => 'App\\Controller\\BilanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blog/back' => [[['_route' => 'back_app_blog_index', '_controller' => 'App\\Controller\\BlogController::Backindex'], null, ['GET' => 0], null, false, false, null]],
        '/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/sorteduserbymail' => [[['_route' => 'app_sorteduser', '_controller' => 'App\\Controller\\BonusUserController::usersortbymail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comments' => [[['_route' => 'app_comments_index', '_controller' => 'App\\Controller\\CommentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/diagnostic/request' => [[['_route' => 'app_diagnostic_request_index', '_controller' => 'App\\Controller\\DiagnosticRequestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/diagnostic/request/index2' => [[['_route' => 'app_diagnostic_request_index2', '_controller' => 'App\\Controller\\DiagnosticRequestController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/diagnostic/request/new' => [[['_route' => 'app_diagnostic_request_new', '_controller' => 'App\\Controller\\DiagnosticRequestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/prehome' => [[['_route' => 'app_prehome', '_controller' => 'App\\Controller\\HomeController::indexpre'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/doctor/medical/record' => [[['_route' => 'admin_medical_record_index', '_controller' => 'App\\Controller\\MedicalRecordController::indexAdmin'], null, ['GET' => 0], null, true, false, null]],
        '/doctor/medical/record/new' => [[['_route' => 'admin_medical_record_new', '_controller' => 'App\\Controller\\MedicalRecordController::newAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient/medical/record' => [[['_route' => 'user_medical_record_index', '_controller' => 'App\\Controller\\MedicalRecordController::indexUser'], null, ['GET' => 0], null, true, false, null]],
        '/patient/medical/record/new' => [[['_route' => 'user_medical_record_new', '_controller' => 'App\\Controller\\MedicalRecordController::newUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/meds' => [[['_route' => 'app_meds_index', '_controller' => 'App\\Controller\\MedsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/meds/new' => [[['_route' => 'app_meds_new', '_controller' => 'App\\Controller\\MedsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/success-url' => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/admin/prescription/show' => [[['_route' => 'admin_prescription_index', '_controller' => 'App\\Controller\\PrescriptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/prescriptions/new' => [[['_route' => 'admin_prescription_new', '_controller' => 'App\\Controller\\PrescriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/prescriptions' => [[['_route' => 'user_prescription_index', '_controller' => 'App\\Controller\\PrescriptionController::userIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/map' => [[['_route' => 'user_map', '_controller' => 'App\\Controller\\PrescriptionController::userMap'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stream' => [[['_route' => 'stream_index', '_controller' => 'App\\Controller\\StreamController::index'], null, null, null, false, false, null]],
        '/stream/create' => [[['_route' => 'stream_create', '_controller' => 'App\\Controller\\StreamController::create'], null, null, null, false, false, null]],
        '/streams' => [[['_route' => 'view_streams', '_controller' => 'App\\Controller\\StreamController::viewStreams'], null, null, null, false, false, null]],
        '/stream/controller/php' => [[['_route' => 'app_stream_controller_php', '_controller' => 'App\\Controller\\StreamControllerPhpController::index'], null, null, null, false, false, null]],
        '/index_sorted_by_name' => [[['_route' => 'app_diagnostic_request_sorted_by_name', '_controller' => 'App\\Controller\\TriDiagnosticController::showDiagnosticRequests'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\TriDiagnosticController::Trier'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_diagnostic_request_search', '_controller' => 'App\\Controller\\TriDiagnosticController::search'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::user'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/d(?'
                    .'|octor/(?'
                        .'|appointment/(?'
                            .'|([^/]++)(?'
                                .'|(*:47)'
                                .'|/edit(*:59)'
                                .'|(*:66)'
                            .')'
                            .'|accept/([^/]++)(*:89)'
                            .'|decline/([^/]++)(*:112)'
                            .'|complete/([^/]++)(*:137)'
                        .')'
                        .'|medical/record/([^/]++)(?'
                            .'|(*:172)'
                            .'|/(?'
                                .'|edit(*:188)'
                                .'|delete(*:202)'
                            .')'
                        .')'
                    .')'
                    .'|iagnostic/request/(?'
                        .'|([^/]++)(?'
                            .'|(*:245)'
                            .'|/edit(*:258)'
                            .'|(*:266)'
                        .')'
                        .'|index_sorted_by_creation_date(*:304)'
                        .'|diagnostic\\-request/([^/]++)/results(*:348)'
                        .'|statistics(*:366)'
                    .')'
                .')'
                .'|/patient/(?'
                    .'|appointment/(?'
                        .'|new/([^/]++)(*:415)'
                        .'|([^/]++)(?'
                            .'|(*:434)'
                            .'|/edit(*:447)'
                            .'|(*:455)'
                        .')'
                    .')'
                    .'|medical/record/([^/]++)(?'
                        .'|(*:491)'
                        .'|/(?'
                            .'|edit(*:507)'
                            .'|delete(*:521)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|ubmit_rating/([^/]++)(*:558)'
                    .'|end_prescription/([^/]++)(*:591)'
                    .'|tream/([^/]++)(*:613)'
                .')'
                .'|/b(?'
                    .'|ilan/([^/]++)(?'
                        .'|(*:643)'
                        .'|/(?'
                            .'|edit(*:659)'
                            .'|generate\\-pdf(*:680)'
                        .')'
                        .'|(*:689)'
                    .')'
                    .'|log/(?'
                        .'|([^/]++)(*:713)'
                        .'|back/([^/]++)(*:734)'
                        .'|([^/]++)(?'
                            .'|/edit(*:758)'
                            .'|(*:766)'
                        .')'
                        .'|blog/([^/]++)/(?'
                            .'|like(*:796)'
                            .'|dislike(*:811)'
                        .')'
                    .')'
                .')'
                .'|/comments/(?'
                    .'|new/([^/]++)(*:847)'
                    .'|([^/]++)(?'
                        .'|(*:866)'
                        .'|/edit(*:879)'
                        .'|(*:887)'
                    .')'
                .')'
                .'|/meds/([^/]++)(?'
                    .'|(*:914)'
                    .'|/edit(*:927)'
                    .'|(*:935)'
                .')'
                .'|/user(?'
                    .'|/(?'
                        .'|prescriptions/([^/]++)(?'
                            .'|/(?'
                                .'|pay(*:988)'
                                .'|checkout(*:1004)'
                            .')'
                            .'|(*:1014)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|end\\-stream(*:1050)'
                                .'|stream(*:1065)'
                            .')'
                            .'|(*:1075)'
                        .')'
                    .')'
                    .'|ban/([^/]++)(*:1098)'
                    .'|unban/([^/]++)(*:1121)'
                .')'
                .'|/admin/prescriptions/([^/]++)(?'
                    .'|(*:1163)'
                    .'|/edit(*:1177)'
                    .'|(*:1186)'
                .')'
                .'|/generate_qr/([^/]++)/([^/]++)/([^/]++)(*:1235)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1280)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1317)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1357)'
                    .'|wdt/([^/]++)(*:1378)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1425)'
                            .'|router(*:1440)'
                            .'|exception(?'
                                .'|(*:1461)'
                                .'|\\.css(*:1475)'
                            .')'
                        .')'
                        .'|(*:1486)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'admin_app_appointment_show', '_controller' => 'App\\Controller\\AppointmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'admin_app_appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::editadmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        66 => [[['_route' => 'admin_app_appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::deleteadmin'], ['id'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => 'appointment_accept', '_controller' => 'App\\Controller\\AppointmentController::accept'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'appointment_decline', '_controller' => 'App\\Controller\\AppointmentController::decline'], ['id'], null, null, false, true, null]],
        137 => [[['_route' => 'appointment_completed', '_controller' => 'App\\Controller\\AppointmentController::complete'], ['id'], null, null, false, true, null]],
        172 => [[['_route' => 'admin_medical_record_show', '_controller' => 'App\\Controller\\MedicalRecordController::showAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'admin_medical_record_edit', '_controller' => 'App\\Controller\\MedicalRecordController::editAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'admin_medical_record_delete', '_controller' => 'App\\Controller\\MedicalRecordController::deleteAdmin'], ['id'], ['POST' => 0], null, false, false, null]],
        245 => [[['_route' => 'app_diagnostic_request_show', '_controller' => 'App\\Controller\\DiagnosticRequestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_diagnostic_request_edit', '_controller' => 'App\\Controller\\DiagnosticRequestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_diagnostic_request_delete', '_controller' => 'App\\Controller\\DiagnosticRequestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_diagnostic_request_index_sorted_by_creation_date', '_controller' => 'App\\Controller\\DiagnosticRequestController::indexSortedByCreationDate'], [], ['GET' => 0], null, false, false, null]],
        348 => [[['_route' => 'diagnostic_results', '_controller' => 'App\\Controller\\DiagnosticRequestController::showDiagnosticResults'], ['id'], null, null, false, false, null]],
        366 => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\DiagnosticRequestController::statistics'], [], null, null, false, false, null]],
        415 => [[['_route' => 'user_app_appointment_new', '_controller' => 'App\\Controller\\AppointmentController::newUser'], ['id_doctor'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        434 => [[['_route' => 'user_app_appointment_show', '_controller' => 'App\\Controller\\AppointmentController::showuser'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'user_app_appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::edituser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'user_app_appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::deleteuser'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'user_medical_record_show', '_controller' => 'App\\Controller\\MedicalRecordController::showUser'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'user_medical_record_edit', '_controller' => 'App\\Controller\\MedicalRecordController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        521 => [[['_route' => 'user_medical_record_delete', '_controller' => 'App\\Controller\\MedicalRecordController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        558 => [[['_route' => 'submit_rating', '_controller' => 'App\\Controller\\AppointmentController::submitRating'], ['id'], ['POST' => 0], null, false, true, null]],
        591 => [[['_route' => 'send_prescription', '_controller' => 'App\\Controller\\PrescriptionController::sendPrescription'], ['id'], null, null, false, true, null]],
        613 => [[['_route' => 'view_stream', '_controller' => 'App\\Controller\\StreamController::viewStream'], ['streamId'], null, null, false, true, null]],
        643 => [[['_route' => 'app_bilan_show', '_controller' => 'App\\Controller\\BilanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        659 => [[['_route' => 'app_bilan_edit', '_controller' => 'App\\Controller\\BilanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        680 => [[['_route' => 'app_bilan_generate_pdf', '_controller' => 'App\\Controller\\BilanController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        689 => [[['_route' => 'app_bilan_delete', '_controller' => 'App\\Controller\\BilanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        713 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'back_app_blog_show', '_controller' => 'App\\Controller\\BlogController::backshow'], ['id'], ['GET' => 0], null, false, true, null]],
        758 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        766 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        796 => [[['_route' => 'app_blog_like', '_controller' => 'App\\Controller\\BlogController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        811 => [[['_route' => 'app_blog_dislike', '_controller' => 'App\\Controller\\BlogController::dislike'], ['id'], ['POST' => 0], null, false, false, null]],
        847 => [[['_route' => 'app_comments_new', '_controller' => 'App\\Controller\\CommentsController::new'], ['blogId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        866 => [[['_route' => 'app_comments_show', '_controller' => 'App\\Controller\\CommentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        879 => [[['_route' => 'app_comments_edit', '_controller' => 'App\\Controller\\CommentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [[['_route' => 'app_comments_delete', '_controller' => 'App\\Controller\\CommentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        914 => [[['_route' => 'app_meds_show', '_controller' => 'App\\Controller\\MedsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        927 => [[['_route' => 'app_meds_edit', '_controller' => 'App\\Controller\\MedsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        935 => [[['_route' => 'app_meds_delete', '_controller' => 'App\\Controller\\MedsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        988 => [[['_route' => 'user_prescription_pay', '_controller' => 'App\\Controller\\PaymentController::pay'], ['id'], ['GET' => 0], null, false, false, null]],
        1004 => [[['_route' => 'user_prescription_checkout_alternative', '_controller' => 'App\\Controller\\PrescriptionController::checkout'], ['id'], ['GET' => 0], null, false, false, null]],
        1014 => [
            [['_route' => 'user_prescription_show', '_controller' => 'App\\Controller\\PrescriptionController::Usershow'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_prescription_checkout', '_controller' => 'App\\Controller\\PrescriptionController::checkout'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1050 => [[['_route' => 'end_stream', '_controller' => 'App\\Controller\\StreamController::endStream'], ['id'], null, null, false, false, null]],
        1065 => [[['_route' => 'user_stream', '_controller' => 'App\\Controller\\StreamController::userStream'], ['id'], null, null, false, false, null]],
        1075 => [
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1098 => [[['_route' => 'admin_ban_user', '_controller' => 'App\\Controller\\UserController::banUser'], ['id'], null, null, false, true, null]],
        1121 => [[['_route' => 'admin_unban_user', '_controller' => 'App\\Controller\\UserController::unbanUser'], ['id'], null, null, false, true, null]],
        1163 => [[['_route' => 'admin_prescription_show', '_controller' => 'App\\Controller\\PrescriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1177 => [[['_route' => 'admin_prescription_edit', '_controller' => 'App\\Controller\\PrescriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1186 => [[['_route' => 'admin_prescription_delete', '_controller' => 'App\\Controller\\PrescriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1235 => [[['_route' => 'generate_qr', '_controller' => 'App\\Controller\\QrController::generateQrCode'], ['description', 'startDate', 'endDate'], null, null, false, true, null]],
        1280 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1317 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1357 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1378 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1425 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1440 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1461 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1475 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1486 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
