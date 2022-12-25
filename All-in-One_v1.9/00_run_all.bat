set current_path=%~dp0

start %current_path %dslan_start.bat
start %current_path %mysql_start.bat
start %current_path %apache_start.bat

start http://localhost