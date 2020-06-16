ace.define("ace/theme/twilight",["require","exports","module","ace/lib/dom"],function(a,b,c){b.isDark=!0,b.cssClass="ace-twilight",b.cssText=".ace-twilight .ace_editor {  border: 2px solid rgb(159, 159, 159);}.ace-twilight .ace_editor.ace_focus {  border: 2px solid #327fbd;}.ace-twilight .ace_gutter {  background: #e8e8e8;  color: #333;}.ace-twilight .ace_print_margin {  width: 1px;  background: #e8e8e8;}.ace-twilight .ace_scroller {  background-color: #141414;}.ace-twilight .ace_text-layer {  cursor: text;  color: #F8F8F8;}.ace-twilight .ace_cursor {  border-left: 2px solid #A7A7A7;}.ace-twilight .ace_cursor.ace_overwrite {  border-left: 0px;  border-bottom: 1px solid #A7A7A7;}.ace-twilight .ace_marker-layer .ace_selection {  background: rgba(221, 240, 255, 0.20);}.ace-twilight.multiselect .ace_selection.start {  box-shadow: 0 0 3px 0px #141414;  border-radius: 2px;}.ace-twilight .ace_marker-layer .ace_step {  background: rgb(198, 219, 174);}.ace-twilight .ace_marker-layer .ace_bracket {  margin: -1px 0 0 -1px;  border: 1px solid rgba(255, 255, 255, 0.25);}.ace-twilight .ace_marker-layer .ace_active_line {  background: rgba(255, 255, 255, 0.031);}.ace-twilight .ace_marker-layer .ace_selected_word {  border: 1px solid rgba(221, 240, 255, 0.20);}.ace-twilight .ace_invisible {  color: rgba(255, 255, 255, 0.25);}.ace-twilight .ace_keyword, .ace-twilight .ace_meta {  color:#CDA869;}.ace-twilight .ace_constant, .ace-twilight .ace_constant.ace_other {  color:#CF6A4C;}.ace-twilight .ace_constant.ace_character,  {  color:#CF6A4C;}.ace-twilight .ace_constant.ace_character.ace_escape,  {  color:#CF6A4C;}.ace-twilight .ace_invalid.ace_illegal {  color:#F8F8F8;background-color:rgba(86, 45, 86, 0.75);}.ace-twilight .ace_invalid.ace_deprecated {  text-decoration:underline;font-style:italic;color:#D2A8A1;}.ace-twilight .ace_support {  color:#9B859D;}.ace-twilight .ace_support.ace_constant {  color:#CF6A4C;}.ace-twilight .ace_fold {    background-color: #AC885B;    border-color: #F8F8F8;}.ace-twilight .ace_support.ace_function {  color:#DAD085;}.ace-twilight .ace_storage {  color:#F9EE98;}.ace-twilight .ace_variable {  color:#AC885B;}.ace-twilight .ace_string {  color:#8F9D6A;}.ace-twilight .ace_string.ace_regexp {  color:#E9C062;}.ace-twilight .ace_comment {  font-style:italic;color:#5F5A60;}.ace-twilight .ace_variable {  color:#7587A6;}.ace-twilight .ace_xml_pe {  color:#494949;}.ace-twilight .ace_meta.ace_tag {  color:#AC885B;}.ace-twilight .ace_entity.ace_name.ace_function {  color:#AC885B;}.ace-twilight .ace_markup.ace_underline {    text-decoration:underline;}.ace-twilight .ace_markup.ace_heading {  color:#CF6A4C;}.ace-twilight .ace_markup.ace_list {  color:#F9EE98;}";var d=a("../lib/dom");d.importCssString(b.cssText,b.cssClass)})