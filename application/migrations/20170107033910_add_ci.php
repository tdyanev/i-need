<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_ci extends CI_Migration {

    public function up() {
        $this->dbforge->add_column('ci_users',
            array(
                'fb_id' => array(
                    'type' => 'VARCHAR',
		    'constraint' => '255',
                )
            )
        );
    }

    public function down() {
        $this->dbforge->drop_column('ci_users', 'fb_id');
    }
}
