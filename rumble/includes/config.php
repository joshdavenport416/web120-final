<?php

//site keys 
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');

//this constant alows a page to knoow its own URL/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
//        case 'template.php';
//            $title = 'Template';
//            $PageID = 'Template';
//        break;
        
        case 'index.php';
            $title = 'Rumble Interiors - Home Page';
            $PageID = 'Home Page';
        break;
        
        case 'about.php';
            $title = 'About';
            $PageID = 'About';
        break;
        
        case 'consultation.php';
            $title = 'Consultation';
            $PageID = 'Consultation';
        break;
        
        case 'form.php';
            $title = 'Consultation Form';
            $PageID = 'Consultation Form';
        break;
        
        case 'formhandler.php';
            $title = 'Google Calendar';
            $PageID = 'Google Calendar';
        break;
        
        case 'gallery.php';
            $title = 'Gallery';
            $PageID = 'Gallery';
        break;
        
        case 'thx.php';
            $title = 'Thank You';
            $PageID = 'Thank you';
        break;
        

        
        default:
            $title = THIS_PAGE;
            $logo = '';
            $PageID = '';                    
}