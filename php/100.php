<?

								function https_curl($url, $data = null)
										{
												$curl = curl_init();
												curl_setopt($curl, CURLOPT_URL, $url);
												curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
												curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
												if (!empty($data)){
													curl_setopt($curl, CURLOPT_POST, 1);
													curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
												}
												curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
												$output = curl_exec($curl);
												curl_close($curl);
												return $output;
									}

									$url ="http://oldman.loocall.com/data/data.php?sn=57cd16f84d529";
									$json ='{
									  "action":"n",
									  "openid":"123456"
									}';
									$res=https_curl($url,$json);
									$arr=json_decode($res,true);
									print_r($arr);
?>
