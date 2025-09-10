<?php
$head = [
    '' => 'Cogniflow | Home',
    '/' => 'Cogniflow | Home',
    'about' => 'Cogniflow | About Us',
    'contact' => 'Cogniflow | Contact Us',
    'services/powersystem' => 'Cogniflow | Power System Consultancy',
    'services/iiot' => 'Cogniflow | Industrial IIoT Solutions',
    'services/automation' => 'Cogniflow | Smart Automation Systems',
    'services/aveva' => 'Cogniflow | Siemens Automation Solutions',
    'services/sensors' => 'Cogniflow | Sensors & Industrial Instruments',
    'services/saas' => 'Cogniflow | Software as a Service (SaaS)',
];

$description = [
    '' => 'Cogniflow Technologies Pvt Ltd Home',
    '/' => 'Cogniflow Technologies Pvt Ltd Home',
    'about' => 'Cogniflow Technologies Pvt Ltd is a future-forward industrial solutions provider specializing in power system consultancy, IIoT implementation, and smart automation systems. With deep expertise in AVEVA platforms and industrial SaaS, we empower process-driven industries to optimize, automate, and scale.',
    'contact' => 'Let’s Power Up Your Business. Contact Cogniflow.',
    'services/powersystem' => 'Cogniflow | Power System Consultancy - Expert electrical studies including load flow, short circuit, stability, and arc flash analysis for safe, efficient grid performance.',
    'services/iiot' => 'Cogniflow | Industrial IIoT Solutions - Real-time data acquisition, edge computing, and cloud analytics to connect, monitor, and optimize industrial operations.',
    'services/automation' => 'Cogniflow | Smart Automation Systems - Integrated PLC, SCADA, and HMI solutions for seamless control, process automation, and system reliability.',
    'services/aveva' => 'Cogniflow | Siemens Automation Solutions - Implementation of AVEVA System Platform, Historian, Insight, and MES for unified industrial intelligence and control.',
    'services/sensors' => 'Cogniflow | Sensors & Industrial Instruments - Industrial-grade sensors, calibration, and network integration for accurate monitoring and process control.',
    'services/saas' => 'Cogniflow | Software as a Service (SaaS) - Scalable cloud applications, dashboards, and APIs for remote monitoring, analytics, and industrial data visualization.'
];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php
            if (array_key_exists($url, $head)) {
                echo $head[$url];
            }else{
                echo 'Cogniflow Technologies Pvt Ltd';
            }
        ?>
    </title>
    <meta name="description" content="
        <?php
            if (array_key_exists($url, $description)) {
                echo $description[$url];
            }else{
                echo 'Cogniflow Technologies Pvt Ltd';
            }
        ?>
    ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="<?= $asset_base ?>assets/images/cogniflow/favicon.png">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="<?= $asset_base ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $asset_base ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $asset_base ?>assets/css/fancySelect.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= $asset_base ?>assets/css/extralayers.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= $asset_base ?>assets/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="<?= $asset_base ?>assets/css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="<?= $asset_base ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= $asset_base ?>assets/css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="<?= $asset_base ?>assets/style.css" />
    <link rel="stylesheet" href="<?= $asset_base ?>assets/switcher/demo.css" type="text/css">
    <link rel="stylesheet" href="<?= $asset_base ?>assets/switcher/colors/blue.css" type="text/css" id="colors">
    <link rel="shortcut icon" href="<?= $asset_base ?>assets/favicon.png">
</head>

