CRM.$(function($) {
  $('td.crm-case-caseview-case_start_date.label').append('\n\
    <div></div>\n\
    <span class="crm-case-summary-label">End Date:</span> '
    + CRM.vars.caseenddate.endDate
  );
});