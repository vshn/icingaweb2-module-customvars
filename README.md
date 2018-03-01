# icingaweb2-module-customvars

This icingaweb2 module shows some custom host variables.

## Details

For this module to work, the host hash 'customvars' must be present. 

Inside the 'customvars' hash, the module searches for a key 'icingaweb\_customvars', which must contain a comma-separated 
list of variable names to be shown. Those keys and their corresponding values are shown as a table in the host view of
icingaweb2.

## Packaging instructions

1. Add a tag to source repository to create a release
1. Download .tar.gz from source repository
1. $ gbp import-orig ../downloaded-from-source-repository.tar.gz, enter version number
1. $ dch -v X.Y.Z-1
1. $ dch -r -D xenial
1. $ git commit debian/changelog
1. $ gbp buildpackage 
1. Test the package
1. $ gbp buildpackage -S --git-tag 
1. $ git push --all
1. $ git push --tags
1. $ cd ..
1. $ dput ppa:vshn/icinga icingaweb2-module-customvars\_0.1.0-1\_source.changes
