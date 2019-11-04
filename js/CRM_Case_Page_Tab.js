CRM.$(function($) {
  $('td.crm-case-caseview-case_start_date.label').append('\n\
    <div></div>\n\
    <span class="crm-case-summary-label">End Date:</span> '
    + CRM.vars.caseenddate.endDate
    + '<a class="crm-hover-button crm-popup" href="' + CRM.vars.caseenddate.updateUrl + '" title="Change case end date (creates activity record)"><i class="crm-i fa-pencil"></i></a>\n\
  ');
});