create database agendaily;

use agendaily;

create table evento (cod_event int(2) primary key auto_increment,
					nome_event varchar(50),
                    data_event date,
                    hrs_inicio time,
                    hrs_fim time,
                    desc_event varchar(100),
                    local_event varchar(50),
                    responsa_eve varchar(40));