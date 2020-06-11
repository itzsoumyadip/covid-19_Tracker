<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigrat extends Migration
{
	public function up()
	{
		 
		$this->forge->addField([

			'id' =>[
				'type'=>'INT',
				'constraint'     => 5,
				'unsigned'=> TRUE,
				'auto_increment'=>TRUE,
			],
			
				'uid' =>[
					'type' =>'VARCHAR',
					'constraint'=>'50'				
				],
				'name'=>[
					'type' =>'VARCHAR',
					'constraint'=>'100'

				],
				'email'=>[
					'type' =>'VARCHAR', 
					'constraint'=>'20',
				],
				 'password'=>[
					'type' =>'VARCHAR',
					'constraint'=>'255',
				 ],
				 'phone'=>[
					'type' =>'VARCHAR',
					'constraint'=>'10',
				 ],
				 'zipCode'=>[
					'type' =>'VARCHAR',
					'constraint'=>'30',
				 ],
				 'gender'=>[
					'type' =>'VARCHAR',
					'constraint'=>'10',
				 ],


				 'Address'=>[
					'type' =>'VARCHAR',
					'constraint'=>'100',
					'null'=>TRUE,
				 ],
				 




		
				 'created_at'=>[
					 'type' =>'TIMESTAMP',
				 ],
				 
				 'updated_at'=>[
					'type' =>'TIMESTAMP',
				],
				
				 



		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('users');


	}

	

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
