<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UlogMigrate extends Migration
{
	public function up()
	{
		$this->forge->addField([

			
			
				'uid' =>[
					'type' =>'VARCHAR',
					'constraint'=>'50'				
				],
					'email'=>[
					'type' =>'VARCHAR',
					'constraint'=>'50',
				],
				 'password'=>[
					'type' =>'VARCHAR',
					'constraint'=>'255',
				 ],
				 'isAdmin'=>[
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
		$this->forge->createTable('ulogins');



	}

	//--------------------------------------------------------------------

	public function down() 
	{
		$this->forge->dropTable('ulogins');
	}
}
