AT PHPDebugBar
=======

Integrate PHPDebugBar to Drupal.

### Install

    $ # Enable at_base module, then download its dependencies
    $ drush en at_base
    $ drush atr at_base
    $ # Enable AT PHPDebugBar, then download its dependencies
    $ drush en at_pdb
    $ drush atr at_pdb

Then login to Drupal, grant `access phpdebugbar` permission to role who can see
debug messages.
