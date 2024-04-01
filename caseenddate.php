<?php

require_once 'caseenddate.civix.php';
use CRM_Caseenddate_ExtensionUtil as E;

/**
 * Implements hook_civicrm_pageRun().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_pageRun
 */
function caseenddate_civicrm_pageRun(&$page) {
  $pageName = $page->getVar('_name');
  $caseId = $page->getVar('_id');
  if ($pageName == 'CRM_Case_Page_Tab' && $caseId) {
    $case = civicrm_api3('case', 'getsingle', array(
      'id' => $caseId,
    ));
    $endDate = CRM_Utils_Array::value('end_date', $case);
    $endDate = CRM_Utils_Date::customFormat($endDate);

    $vars = array(
      'endDate' => $endDate,
    );
    CRM_Core_Resources::singleton()->addScriptFile('caseenddate', 'js/CRM_Case_Page_Tab.js');
    CRM_Core_Resources::singleton()->addVars('caseenddate', $vars);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function caseenddate_civicrm_config(&$config) {
  _caseenddate_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function caseenddate_civicrm_install() {
  _caseenddate_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function caseenddate_civicrm_enable() {
  _caseenddate_civix_civicrm_enable();
}
