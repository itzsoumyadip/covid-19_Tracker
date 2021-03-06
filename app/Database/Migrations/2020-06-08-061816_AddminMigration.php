<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddminMigration extends Migration
{	public function up()
	{
		$this->forge->addField([

			
			
				'uid' =>[
					'type' =>'VARCHAR',
					'constraint'=>'50'				
				],
					'email'=>[
					'type' =>'VARCHAR',
					'constraint'=>'20',
				],
				 'password'=>[
					'type' =>'VARCHAR',
					'constraint'=>'255',
				 ],
				 'isAddmin'=>[
					'type' =>'TINYINT',
					
				 ],
				 'isUser'=>[
					'type' =>'TINYINT',
					
				 ],
				 'created_at'=>[
					'type' =>'TIMESTAMP',
				],
				
				'updated_at'=>[
				   'type' =>'TIMESTAMP',
			   ],

				 


				 ]);
		$this->forge->addKey('uid',TRUE);
		$this->forge->createTable('alogins');



	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('alogins');
	}
}
