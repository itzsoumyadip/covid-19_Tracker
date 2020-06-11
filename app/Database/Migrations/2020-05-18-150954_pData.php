<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PData extends Migration
{
	public function up()
	{
	
		$this->forge->addField([
				'nc' =>[
					'type' =>'VARCHAR',
					'constraint'=>'100',
					'null'=>TRUE,
				],
				'nd' =>[
					'type' =>'VARCHAR',
					'constraint'=>'100',
					'null'=>TRUE,
				],
				'nr' =>[
					'type' =>'VARCHAR',
					'constraint'=>'100',
					'null'=>TRUE,
				]
				
		]);
		$this->forge->createTable('pData');


	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pData');
	}
}