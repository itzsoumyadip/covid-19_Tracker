<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostMigration extends Migration
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
			
			'suspect_name' =>[
					'type' =>'VARCHAR',
					'constraint'=>'50',
					'null'=>TRUE,
				],
			
			'suspect_email' =>[
					'type' =>'VARCHAR',
					'constraint'=>'50',
					'null'=>TRUE,
				],
				'suspect_addres' =>[
					'type' =>'VARCHAR',
					'constraint'=>'100',
					'null'=>TRUE,
				],
					
				


				'suspect_city' =>[
					'type' =>'VARCHAR',
					'constraint'=>'30',
					'null'=>TRUE,
				],
				
				'suspect_zipCode'=>[
					'type' =>'VARCHAR',
					'constraint'=>'30',
				 ],

				 'suspect_country'=>[
					'type' =>'VARCHAR',
					'constraint'=>'40',
				 ],




				 'gender'=>[
					'type' =>'VARCHAR',
					'constraint'=>'10',
					'null'=>TRUE,
				 ],
				 'suspect_doc'=>[
					'type' =>'BLOB',
					'null'=>TRUE,
					
				 ],
				 'suspect_url'=>[
					'type' =>'VARCHAR',
					 'constraint'=>'2083',
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
		$this->forge->createTable('Posts');


	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Posts');
	}
}
