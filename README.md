# icingaweb2-module-customvars

This icingaweb2 module shows some custom host variables.

## Details

For this module to work, the host hash 'customvars' must be present. 

Inside the 'customvars' hash, the module searches for a key 'icingaweb_customvars', which must contain a comma-separated 
list of variable names to be shown. Those keys and their corresponding values are shown as a table in the host view of
icingaweb2.
