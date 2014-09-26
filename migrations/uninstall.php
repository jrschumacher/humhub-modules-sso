<?php

class uninstall extends ZDbMigration {

    public function up() {
    }

    public function down() {
        echo "uninstall does not support migration down.\n";
        return false;
    }

}