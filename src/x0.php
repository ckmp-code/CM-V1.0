<?php
# Command Line

	if($command=='./gabung')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Selamat datang di CKMP GROUP 
                    Bagaimana cara bergabung dengan kami. Beberapa kriteria yang harus Anda penuhi diantaranya:
                    1. Memiliki alamat email yang valid atau aktif
                    2. Memiliki akun github
                    3. Membuat formulir pendaftaran yang berisi format:
                        1. Nama lengkap:
                        2. Tgl lahir:
                        3. Bahasa Pemograman:
                        4. Nama Sekolah:
                            a. Jurusan:
                        5. Data diatas dikirim ke email info@ckmp.ga atau info@arifys.gq
                     4. Menyetujui persyaratan umum CKMP GROUP
                     5. Bisa bekerjasama'
									)
							)
						);
				
	}
	else
	if($command=='+./kc')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'ICNUK ATAK AUMES
                    1. GITHUB. XH.cH*Ok@mZp%%#$%gLr8oERuWp1.MTZ
                    2. HEROKU. MZN.cA&k<>mLp#g#r$RToLOuZp1!.NOSERU
                    3. LINW. BDX.HJKL.sLAM.etKiaMAkTu1$$12$.LOK.DFG
                    4. Y4ND3X. c#k<mLKp<g*r?o#up'
									)
							)
						);
				
	
	}

$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);
