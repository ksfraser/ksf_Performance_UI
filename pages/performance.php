<?php
$page_security = 'SA_PERFORMANCE'; $path_to_root = "../../..";
include_once($path_to_root . "/includes/session.inc");
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/modules/FA_Performance/includes/performance_db.inc");
page(_("Performance"), false, false, "", "");
$reviews = get_reviews(['employee_id' => $_SESSION["wa_user"]->employee_id]);
start_table(TABLESTYLE);
table_header([_('Period'), _('Rating'), _('Status')]);
while ($r = db_fetch($reviews)) { alt_table_row($r); label_cell(sql2date($r['period_start']).'-'.sql2date($r['period_end'])); label_cell($r['overall_rating']?:'-'); label_cell($r['status']); }
end_table(1); end_page(true);