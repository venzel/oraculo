<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
		<title>Oráculo Financeiro</title>	
        <meta name="description" content="Sistema Financeiro Oráculo" />
		<meta name="author" content="Almeida Júnior" />
        <link rel="stylesheet" href="lib/css/defaultoraculo.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="lib/css/paineloraculo.css" type="text/css" media="screen" />
	</head>
    
    <script language="javascript">
	
		// Fechar box
		function fecharBox() {
			var strElemento = document.getElementById("fbo");
			strElemento.setAttribute("class", "bxf");
		}
	
		// Duvidas
		function exibirInfo(strItem, strOpc) {
			
			var strItem = "ine_"+strItem
			
			var strElemento = document.getElementById(strItem);
			
			if(strOpc == 'a') {
				strElemento.style.display='block';
			} else if (strOpc == 'b') {
				strElemento.style.display='none';
			}
			
		}
	</script>
	
	<body>
    	
        <!-- Boxes flutuante ........................................................ class="bxf bsh" painel ativado e class="bxf" painel desativado -->
        <div id="fbo" class="bxf bsh">
        	
            <!-- Box transparente -->
            <div class="bsw"></div>
            <!-- :: Box transparente -->
    		
            <!-- Conteudo do box flutuante -->
            <div class="bc_0">
                <div class="bc_1">
                    <div class="bc_2">
                        <div class="bc_3">
                            
                            <!-- Box confirmacao de pagamento ........................................................ class="bip psf" painel ativado e class="bip" painel desativado -->
                            <div class="bip psf">
                                
                                <!-- Parte superior : titulo -->
                                <div class="psu cf_tit">
                                    <span>Formulário de confirmação de pagamento</span>
                                    <a class="fct" onClick="fecharBox();"></a>
                                </div>
                                <!-- :: Parte superior : titulo -->
                                
                                <!-- Parte interna -->
                                <div class="moi">
                                
                                    <!-- Mensagem de sucesso -->
                                    <div class="msscp">
                                        <span>Confirmação de pagamento gravado com sucesso!</span>
                                    </div>
                                    <!-- :: Mensagem de sucesso -->
                                
                                    <!-- Formulario -->
                                    <div class="fcp">
                                    
                                        <!-- Alerta de mensagem -->
                                        <div class="msfpag">
                                            <span>Preencha os campos destacados!</span>
                                        </div>
                                        <!-- :: Alerta de mensagem -->
                                    
                                        <!-- Parte 1 do formulario -->
                                        <div class="fmp_a">
                                            
                                            <!-- CPF / CNPJ -->
                                            <div class="ifo">
                                                <div class="lgl">CPF / CNPJ</div>
                                                <div class="ipt frc_1 vlc">
                                                    <span class="ero"></span>
                                                    <input name="" type="text" value="" class="txtinput">
                                                </div>
                                            </div>
                                            <!-- :: CPF / CNPJ -->
                                            
                                            <!-- Razao social -->
                                            <div class="ifo">
                                                <div class="lgl">Razão social</div>
                                                <div class="ipt vlc frc_6">
                                                    <span class="ero"></span>
                                                    <input name="" type="text" value="" class="txtinput">
                                                </div>
                                            </div>
                                            <!-- :: Razao social -->
                                            
                                            <!-- Nome fantasia -->
                                            <div class="ifo">
                                                <div class="lgl">Nome fantasia</div>
                                                <div class="ipt frc_6"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Nome fantasia -->
                                            
                                            <!-- Nome fantasia -->
                                            <div class="ifo">
                                                <div class="lgl hlh">Descrição de pagamento</div>
                                                <div class="ipt frc_6"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Nome fantasia -->
                                            
                                        </div>
                                        <!-- :: Parte 1 do formulario -->
                                        
                                        <!-- Parte 2 e 3 do formulario -->
                                        <div class="evp">
                                            
                                            <!-- Parte 2 do formulario -->
                                            <div class="fmp_b">
                                                
                                                <!-- Tipo pgto -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Tipo de pgto</div>
                                                    <div class="iptp2">
                                                        <select name="" class="txtslc">
                                                            <option>1 - Assinatura</option>
                                                        </select>
                                                        <a href="dvi" class="duv" onMouseOver="exibirInfo(0, 'a');" onMouseOut="exibirInfo(0, 'b');"></a>
                                                        <div id="ine_0" class="bxd">
                                                        	<div class="pdv"></div>
                                                        	<h2>Assinatura</h2>
                                                        	<p>É um tipo de pgto certo em valor e vencimento, sem data programada para termino. Exemplo: Assinatura de revistas, segurança, limpeza tercerizada, contabilidade, assistência jurídica, fornecedor de softwares, etc..</p>
                                                            <h2>Parcelamento</h2>
                                                        	<p>Assemelha-se com a Assinatura, só que tem data prevista para termino, devido a definição de quantidade de parcelas. Exemplo: parcelamento de computador, parcelas de financiamento, etc.. </p>
															<h2>Pagamento recorrrente</h2>
                                                        	<p>Trata-se de um modo de pgto que tem reiteração, mas não tem valor certo, podendo variar entre um valor mínimo e máximo previamente definido.  Não tem data prevista p/ termino. Exemplo: energia, agua, telefonia, folha de pgto, etc..</p>
															<h2>Orçamento</h2>
                                                        	<p class="htx">Defini-se o valor total e a periodicidade de pgto. Exemplo: Manutenção de ar-condicionados, manutenção predial, etc.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- :: Tipo pgto -->
                                                
                                                <!-- Periocidade -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Periocidade</div>
                                                    <div class="iptp2">
                                                        <select name="" class="txtslc">
                                                            <option>1 - Mensalmente</option>
                                                        </select>
                                                        <a href="dvi" class="duv" onMouseOver="exibirInfo(1, 'a');" onMouseOut="exibirInfo(1, 'b');"></a>
                                                        <div id="ine_1" class="bxd">
                                                        	<div class="pdv"></div>
                                                        	<h2>Mensalmente</h2>
                                                        	<p>Aqui segue a descrição da explicação sobre mensalmente!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- :: Periocidade -->
                                                
                                                <!-- Tipo de despesa -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Tipo de despesa</div>
                                                    <div class="iptp2">
                                                        <select name="" class="txtslc">
                                                            <option>1 - Fixa</option>
                                                        </select>
                                                        <a href="dvi" class="duv" onMouseOver="exibirInfo(2, 'a');" onMouseOut="exibirInfo(2, 'b');"></a>
                                                        <div id="ine_2" class="bxd">
                                                        	<div class="pdv"></div>
                                                        	<h2>Fixa</h2>
                                                        	<p>Aqui segue a descrição da explicação sobre fixa!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- :: Tipo de despesa -->
                                                
                                                <!-- Exige nota fiscal -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Exige nota fiscal</div>
                                                    <div class="iptp2 vlc">
                                                        <span class="ero"></span>
                                                        <select name="" class="txtslc">
                                                            <option>Sim</option>
                                                        </select>
                                                        <a href="dvi" class="duv" onMouseOver="exibirInfo(3, 'a');" onMouseOut="exibirInfo(3, 'b');"></a>
                                                        <div id="ine_3" class="bxd">
                                                        	<div class="pdv"></div>
                                                        	<h2>Exige nota fiscal</h2>
                                                        	<p>Aqui segue a descrição da explicação sobre exige nota fiscal!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- :: Exige nota fiscal -->
                                                
                                                <!-- Quantidade por ciclos -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Qte. por ciclos</div>
                                                    <div class="iptp2 vlc">
                                                        <span class="ero"></span>
                                                        <input name="" type="text" value="" class="txtinput">
                                                    </div>
                                                </div>
                                                <!-- :: Quantidade por ciclos -->
                                                
                                                <!-- Dia para pagamento -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Dia para pgto</div>
                                                    <div class="iptp2"><input name="" type="text" value="" class="txtinput"></div>
                                                </div>
                                                <!-- :: Dia para pagamento -->
                                                
                                                <!-- Conta contabil -->
                                                <div class="ifop2">
                                                    <div class="lglp2">Conta contábil</div>
                                                    <div class="iptp2"><input name="" type="text" value="" class="txtinput"></div>
                                                </div>
                                                <!-- :: Conta contabil -->
                                                
                                            </div>
                                            <!-- :: Parte 2 do formulario -->
                                            
                                            <!-- Parte 3 e 4 do formulario -->
                                            <div class="evi">
                                            
                                                <!-- Parte 3 do formulario -->
                                                <div class="fmp_c">
                                                
                                                    <!-- Valor minimo -->
                                                    <div class="ifop3">
                                                        <div class="lglp3">Valor mínimo</div>
                                                        <div class="iptp3 vlc">
                                                            <span class="ero"></span>
                                                            <input name="" type="text" value="0,00" class="txtinput">
                                                        </div>
                                                    </div>
                                                    <!-- :: Valor minimo -->
                                                    
                                                    <!-- Valor maximo -->
                                                    <div class="ifop3">
                                                        <div class="lglp3">Valor máximo</div>
                                                        <div class="iptp3"><input name="" type="text" value="0,00" class="txtinput"></div>
                                                    </div>
                                                    <!-- :: Valor maximo -->
                                                    
                                                    <!-- Valor de encargos -->
                                                    <div class="ifop3">
                                                        <div class="lglp3">Vl. de encargos</div>
                                                        <div class="iptp3"><input name="" type="text" value="0,00" class="txtinput"></div>
                                                    </div>
                                                    <!-- :: Valor de envargos -->
                                                    
                                                </div>
                                                <!-- :: Parte 3 do formulario -->
                                                
                                                <!-- Parte 4 do formulario -->
                                                <div class="fmp_d">
                                                
                                                    <!-- Inicio do pagamento -->
                                                    <div class="ifop4">
                                                        <div class="lglp4">Início do pgto</div>
                                                        <div class="iptp4 vlc">
                                                            <span class="ero"></span>
                                                            <input name="" type="text" value="" class="txtinput">
                                                        </div>
                                                    </div>
                                                    <!-- :: Inicio do pagamento -->
                                                    
                                                    <!-- Final do pagamento -->
                                                    <div class="ifop4">
                                                        <div class="lglp4">Final do pgto</div>
                                                        <div class="iptp4"><input name="" type="text" value="" class="txtinput"></div>
                                                    </div>
                                                    <!-- :: final do pagamento -->
                                                    
                                                    <!-- Pagamento ativo -->
                                                    <div class="pat">
                                                        <div><input name="" type="checkbox" value="" id="pati" /></div><label for="pati">Pagamento ativo</label>
                                                    </div>
                                                    <!-- :: Pagamento ativo -->
                                                
                                                </div>
                                                <!-- :: Parte 4 do formulario -->
                                                
                                            </div>
                                            <!-- :: Parte 3 e 4 do formulario -->
                                            
                                        </div>
                                        <!-- :: Parte 2 e 3 do formulario -->
                                        
                                        <!-- Rodape do formulario -->
                                        <div class="rpf bgb">
                                            
                                            <!-- Linha divisoria ilustrativa -->
                                            <div class="lnd"></div>
                                            <!-- :: Linha divisoria ilustrativa -->
                                            
                                            <!-- Botoes de cancelar e gravar -->
                                            <div class="btfcp"> 
                                                <input name="" type="button" value="Cancelar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                                <input name="" type="button" value="Gravar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                            </div>
                                            <!-- :: Botoes de cancelar e gravar -->
                                            
                                        </div>
                                        <!-- :: Rodape do formulario -->
                                        
                                    </div>
                                    <!-- :: Formulario -->
                                
                                </div>
                                <!-- :: Parte interna -->
                                
                            </div>
                            <!-- :: Box confirmacao de pagamento ........................................................ -->
                            
                            <!-- Box manutencao de atividades financeiras ........................................................ class="bip psf" painel ativado e class="bip" painel desativado -->
                            <div class="bip">
                                
                                <!-- Parte superior : titulo -->
                                <div class="psu cf_tit">
                                    <span>Formulário de manutenção de atividades financeiras</span>
                                    <a class="fct" href="xx"></a>
                                </div>
                                <!-- :: Parte superior : titulo -->
                                
                                <!-- Parte interna -->
                                <div class="moi">
                                
                                    <!-- Mensagem de sucesso -->
                                    <div class="msscp">
                                        <span>Manutenção de atividade financeira cadastrada com sucesso!</span>
                                    </div>
                                    <!-- :: Mensagem de sucesso -->
                                
                                    <!-- Formulario -->
                                    <div class="fcp">
                                    
                                        <!-- Alerta de mensagem -->
                                        <div class="msfpag">
                                            <span>Preencha os campos destacados!</span>
                                        </div>
                                        <!-- :: Alerta de mensagem -->
                                    
                                        <!-- Capsula do formulario -->
                                        <div class="fmp_a bbf">
                                            
                                            <!-- Id -->
                                            <div class="ifo">
                                                <div class="lgl">ID</div>
                                                <div class="ipt frc_2 vlc"><span class="ero"></span><input name="" type="text" value="" class="txtinput"></div> <!-- Quando der erro, entra a classe vlc e a tag span ao lado -->
                                            </div>
                                            <!-- :: Id -->
                                            
                                            <!-- Data -->
                                            <div class="ifo">
                                                <div class="lgl">Data</div>
                                                <div class="ipt frc_3"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Data -->
                                            
                                            <!-- Id do gestor -->
                                            <div class="ifo">
                                                <div class="lgl">Id do gestor</div>
                                                <div class="ipt frc_2"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Id do gestor -->
                                            
                                            <!-- Id de controle -->
                                            <div class="ifo">
                                                <div class="lgl">Id de controle</div>
                                                <div class="ipt frc_2"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Id do controle -->
                                            
                                            <!-- Requisitante -->
                                            <div class="ifo">
                                                <div class="lgl">Requisitante</div>
                                                <div class="ipt frc_0"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Requisitante -->
                                            
                                            <!-- Valor -->
                                            <div class="ifo">
                                                <div class="lgl">Valor</div>
                                                <div class="ipt frc_4"><input name="" type="text" value="0,00" class="txtinput"></div>
                                            </div>
                                            <!-- :: Valor -->
                                            
                                            <!-- Status -->
                                            <div class="ifo">
                                                <div class="lgl">Status</div>
                                                <div class="ipt vlc frc_4">
                                                    <span class="ero"></span>
                                                    <select name="" class="txtslc">
                                                        <option>Ativo</option>
                                                        <option>Inativo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- :: Status -->
                                            
                                            <!-- Protocolo -->
                                            <div class="ifo">
                                                <div class="lgl">Protocolo</div>
                                                <div class="ipt frc_5"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Protocolo -->
                                            
                                            <!-- Data de pagamento -->
                                            <div class="ifo">
                                                <div class="lgl">Data de pagamento</div>
                                                <div class="ipt frc_3"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Data de pagamento -->
                                            
                                        </div>
                                        <!-- :: Capsula do formulario -->
    
                                        <!-- Rodape do formulario -->
                                        <div class="rpf bgb">
                                            
                                            <!-- Linha divisoria ilustrativa -->
                                            <div class="lnd"></div>
                                            <!-- :: Linha divisoria ilustrativa -->
                                            
                                            <!-- Botoes de cancelar e cadastrar -->
                                            <div class="btfcp"> 
                                                <input name="" type="button" value="Cancelar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                                <input name="" type="button" value="Cadastrar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                            </div>
                                            <!-- Botoes de cancelar e cadastrar -->
                                            
                                        </div>
                                        <!-- :: Rodape do formulario -->
                                        
                                    </div>
                                    <!-- :: Formulario -->
                                
                                </div>
                                <!-- :: Parte interna -->
                                
                            </div>
                            <!-- :: Box manutencao de atividades financeiras ........................................................ -->
                            
                            <!-- Box plano de contas ........................................................ class="bip psf" painel ativado e class="bip" painel desativado -->
                            <div class="bip">
                                
                                <!-- Parte superior : titulo -->
                                <div class="psu cf_tit">
                                    <span>Formulário de cadastro de plano de contas</span>
                                    <a class="fct" href="xx"></a>
                                </div>
                                <!-- :: Parte superior : titulo -->
                                
                                <!-- Parte interna -->
                                <div class="moi">
                                
                                    <!-- Mensagem de sucesso -->
                                    <div class="msscp">
                                        <span>Plano de contas cadastrado com sucesso!</span>
                                    </div>
                                    <!-- :: Mensagem de sucesso -->
                                
                                    <!-- Formulario -->
                                    <div class="fcp">
                                    
                                        <!-- Alerta de mensagem -->
                                        <div class="msfpag">
                                            <span>Preencha os campos destacados!</span>
                                        </div>
                                        <!-- :: Alerta de mensagem -->
                                    
                                        <!-- Capsula do formulario -->
                                        <div class="fmp_a bbf">
                                            
                                            <!-- Codigo -->
                                            <div class="ifo">
                                                <div class="lgl">Código</div>
                                                <div class="ipt frc_2 vlc"><span class="ero"></span><input name="" type="text" value="" class="txtinput"></div> <!-- Quando der erro, entra a classe vlc e a tag span ao lado -->
                                            </div>
                                            <!-- :: Codigo -->
                                            
                                            <!-- Nome -->
                                            <div class="ifo">
                                                <div class="lgl">Nome</div>
                                                <div class="ipt frc_0"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Nome -->     
                                            
                                            <!-- Tipo -->
                                            <div class="ifo">
                                                <div class="lgl">Tipo</div>
                                                <div class="ipt frc_1">
                                                    <select name="" class="txtslc">
                                                        <option>A - Analítica (conta)</option>
                                                        <option>B - Sintética (grupo de contas)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- :: Tipo -->
                                            
                                            <!-- Natureza -->
                                            <div class="ifo">
                                                <div class="lgl">Natureza</div>
                                                <div class="ipt frc_1 vlc">
                                                    <span class="ero"></span>
                                                    <select name="" class="txtslc">
                                                        <option>2 - Conta de Passivo</option>
                                                        <option>3 - Patrimônio Líquido</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- :: Natureza -->
                                             
                                        </div>
                                        <!-- :: Capsula do formulario -->
    
                                        <!-- Rodape do formulario -->
                                        <div class="rpf">
                                            
                                            <!-- Linha divisoria ilustrativa -->
                                            <div class="lnd"></div>
                                            <!-- :: Linha divisoria ilustrativa -->
                                            
                                            <!-- Botoes de cancelar e cadastrar -->
                                            <div class="btfcp"> 
                                                <input name="" type="button" value="Cancelar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                                <input name="" type="button" value="Cadastrar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                            </div>
                                            <!-- Botoes de cancelar e cadastrar -->
                                            
                                        </div>
                                        <!-- :: Rodape do formulario -->
                                        
                                    </div>
                                    <!-- :: Formulario -->
                                
                                </div>
                                <!-- :: Parte interna -->
                                
                            </div>
                            <!-- :: Box plano de contas ........................................................ -->
                            
                            <!-- Box grupos de despesa ........................................................ class="bip psf" painel ativado e class="bip" painel desativado -->
                            <div class="bip">
                                
                                <!-- Parte superior : titulo -->
                                <div class="psu cf_tit">
                                    <span>Formulário de grupos de despesa</span>
                                    <a class="fct" href="xx"></a>
                                </div>
                                <!-- :: Parte superior : titulo -->
                                
                                <!-- Parte interna -->
                                <div class="moi">
                                
                                    <!-- Mensagem de sucesso -->
                                    <div class="msscp">
                                        <span>Grupo de despesa cadastrado com sucesso!</span>
                                    </div>
                                    <!-- :: Mensagem de sucesso -->
                                
                                    <!-- Formulario -->
                                    <div class="fcp">
                                    
                                        <!-- Alerta de mensagem -->
                                        <div class="msfpag">
                                            <span>Preencha os campos destacados!</span>
                                        </div>
                                        <!-- :: Alerta de mensagem -->
                                    
                                        <!-- Capsula do formulario -->
                                        <div class="fmp_a bbf">
                                            
                                            <!-- Id -->
                                            <div class="ifo">
                                                <div class="lgl">ID</div>
                                                <div class="ipt frc_2 vlc"><span class="ero"></span><input name="" type="text" value="" class="txtinput"></div> <!-- Quando der erro, entra a classe vlc e a tag span ao lado -->
                                            </div>
                                            <!-- :: Id -->
                                            
                                            <!-- Descricao -->
                                            <div class="ifo">
                                                <div class="lgl">Descrição</div>
                                                <div class="ipt frc_6"><input name="" type="text" value="" class="txtinput"></div>
                                            </div>
                                            <!-- :: Descricao -->     
                                             
                                        </div>
                                        <!-- :: Capsula do formulario -->
    
                                        <!-- Rodape do formulario -->
                                        <div class="rpf">
                                            
                                            <!-- Linha divisoria ilustrativa -->
                                            <div class="lnd"></div>
                                            <!-- :: Linha divisoria ilustrativa -->
                                            
                                            <!-- Botoes de cancelar e cadastrar -->
                                            <div class="btfcp"> 
                                                <input name="" type="button" value="Cancelar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                                <input name="" type="button" value="Cadastrar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" />
                                            </div>
                                            <!-- Botoes de cancelar e cadastrar -->
                                            
                                        </div>
                                        <!-- :: Rodape do formulario -->
                                        
                                    </div>
                                    <!-- :: Formulario -->
                                
                                </div>
                                <!-- :: Parte interna -->
                                
                            </div>
                            <!-- :: Box grupos de despesa ........................................................ -->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteudo do box flutuante -->
        
        </div>
		<!-- :: Boxes flutuante -->
    	
        <!-- box -->
        <div id="box">
        
			<!-- Box Capsula -->
        	<div id="box_e">
        	
                <!-- box_a -->
                <div id="box_a">
                    
                    <!-- Linha de correcao -->
                    <div class="lcr cfg_hli"></div>
                    <!-- :: Linha de correcao -->
                    
                    <!-- Resize -->
                    <div class="resize"></div>
                    <!-- :: Resize -->
                    
                    <!-- Usuario -->
                    <div id="usuario" class="cfg_lin bgb">
                    
                        <!-- Foto usuario -->
                        <div id="fotousuario">
                        </div>
                        <!-- :: Foto usuario -->
                        
                        <!-- Dados acesso -->
                        <div id="dadosacesso">	
                            <p><b>Tiago Campos</b></p>
                            <p class="uacesso">Último acesso em 28 jun 2012</p>
                        </div>
                        <!-- :: Dados acesso -->
                        
                        <!-- Configuracoes usuario -->
                        <ul id="confusuario">
                            <li><a href="meusdados.aspx" id="meusdados">Meus dados</a></li>
                            <li><a href="alterarsenha.aspx" id="alterarsenha">Alterar senha</a></li>
                            <li><a href="sairseguranca.aspx" id="sairsistema">Sair com seguranca</a></li>
                        </ul>
                        <!-- :: Configuracoes usuario -->
                        
                    </div>
                    <!-- :: Usuario -->
                    
                    <!-- Menu
                    <div id="menu">
                        

                        <div class="m_e">
                            <div class="lgd"><span>Lançamentos</span><a href="#"></a></div>
                            <ul>
                            	<li><a href="#" class="novo">Novo</a></li>
                                <li><a href="#" class="busca">Consulta</a></li>
                            </ul>
                        </div>

                        <div class="m_e">
                            <div class="lgd"><span>Relatórios</span><a href="#"></a></div>
                            <ul>
                            	<li><a href="#" class="estat">DRE</a></li>
                                <li><a href="#" class="estat">Outros</a></li>
                            </ul>
                        </div>

                        <div class="m_e">
                            <div class="lgd"><span>Configurações</span><a href="#"></a></div>
                            <ul>
                            	<li><a href="#" class="usuario">Usuários</a></li>
                                <li><a href="#" class="grupos">Grupos</a></li>
                            	<li><a href="#" class="contas">Contas</a></li>
                                <li><a href="#" class="config">Geral</a></li>
                            </ul>
                        </div>
                    
                    </div>
                     Menu -->
                    
                    <!-- Busca
                    <div id="busca">
                    	<label>Buscar</label>
                        <div><input name="" type="text" class="txtinput"></div>
                        <input name="" type="button" class="btninput" value="Buscar" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';">
                    </div>
                    Busca -->
                    
                    <!-- Menu -->
                    <ul id="menu">
                    	<li class="item1"><a class="slc"><span></span>Pagamentos</a></li><!-- Quando o link for selecionado, o href some e insere class="slc" -->
                        <li class="item9"><a href="#"><span></span>Planos de contas</a></li>
                        <li class="item6"><a href="#"><span></span>Grupos financeiros</a></li>
                        <li class="item10"><a href="#"><span></span>Notificações</a></li>
                        <li class="item3"><a href="#"><span></span>Relatórios</a></li>
                        <li class="item11"><a href="#"><span></span>Documentação</a></li>
                        <li class="item8"><a href="#"><span></span>Configurações</a></li> 
                    </ul>
                    <!-- :: Menu -->
                    
                    <!-- Downloads -->
                    <div id="dwl">
                    	<span>Downloads</span>
                    	<ul>
                        	<li><a href="d1">Documentação</a></li>
                            <li><a href="d2">Artigos técnicos</a></li>
                            <li><a href="d3">Comunidade</a></li>
                        </ul>
                    </div>
                    <!-- Downloads -->
                    
                </div>
                <!-- :: box_a -->
                
                <!-- box_x -->
                <div id="box_x">
                    
                    <!-- box_b -->
                    <header id="box_b" class="cfg_lin">
                    	
                        <!-- Logo -->
                        <div id="logo">
                        	<img src="images/oraculo.png" />
                        </div>
                        <!-- :: Logo -->
                        
                        <!-- Estatisticas -->
                        <div id="estat">
                        	
                            <!-- Setor 1 -->
                        	<div class="set">
                                <div class="set_e">
                                	<span class="test">Lançamentos pendentes</span>
                                    <span class="tvl">80</span>
                                </div>
                            </div>
                            <!-- :: Setor 1 -->
                            
                            <!-- Setor 2 -->
                        	<div class="set">
                                <div class="set_e">
                                	<span class="test">Grupos de usuários</span>
                                    <span class="tvl">11</span>
                                </div>
                            </div>
                            <!-- :: Setor 2 -->
                            
                            <!-- Setor 3 -->
                        	<div class="set">
                                <div class="set_e">
                                	<span class="test">Total de usuários</span>
                                    <span class="tvl">5</span>
                                </div>
                            </div>
                            <!-- :: Setor 3 -->
                            
                            <!-- Setor 4 -->
                        	<div class="set">
                                <div class="set_e">
                                	<span class="test">Total de contas</span>
                                    <span class="tvl">8</span>
                                </div>
                            </div>
                            <!-- :: Setor 4 -->
                        
                        </div>
                        <!-- :: Estatisticas -->
                        
                    </header>
                    <!-- :: box_b -->
                    
                    <!-- box_y -->
                    <div id="box_y">
                        
                        <!-- box_c -->
                        <div id="box_c">
                            
                            <!-- Linha de correcao 1 -->
                            <div class="lnc cfg_hli"></div>
                            <!-- :: Linha de correcao 1 -->
                            
                            <!-- Linha de correcao 2 -->
                            <div class="lnc2 cfg_hli"></div>
                            <!-- :: Linha de correcao 2 -->
                            
                            <!-- Resize -->
                            <div class="resize"></div>
                            <!-- :: Resize -->

                            <!-- Interno -->
                            <div id="interno" class="st_e">
                            	
                                <!-- Setor 1 -->
                                <div class="setores">
                                	
                                    <!-- Capsula -->
                                    <div class="top_e">
                                    	
                                        <!-- Sort -->
                                        <div class="sort"></div>
                                        <!-- :: Sort -->
                                        
                                        <!-- Complemento -->
                                        <div class="scomp"></div>
                                        <!-- :: Complemento -->
                                    	
                                        <!-- Barra de titulo -->
                                        <div class="btit cf_tit">
                                        	<span>Estatísticas do sistema</span>
                                            <div class="mic">
                                            	<a href="xx" class="miz"></a>
                                                <a href="xx" class="fch"></a>
                                            </div>
                                        </div>
                                    	<!-- :: Barra de titulo -->
                                        
                                        <!-- Barra de configuracoes -->
                                        <div class="bconf">
                                        
                                        	<!-- Periofo -->
                                            <div class="periodo">
                                            
                                            	<span class="txper">Período</span>
                                                <div class="inp">
                                                	<input name="" type="text" value="23/04" class="txtinput" disabled>
                                                    <a href="#"></a>
                                                </div>
                                                
                                            	<div class="seta"></div>
                                                <div class="inp">
                                                	<input name="" type="text" value="23/04" class="txtinput" disabled>
                                                    <a href="#"></a>
                                                </div>
                                            </div>
                                            <!-- :: Periofo -->
                                        
                                        </div>
                                        <!-- :: Barra de configuracoes -->
                                        
                                    </div>
                                    <!-- :: Capsula -->
                                    
                                    <!-- Capsula -->
                                    <div class="cto_e">
                                    	
                                        <!-- Conteudo interno 1 -->
                                    	<div class="cto_e1">
                                        
                                            <!-- Grafico 1 -->
                                            <div class="sta">
                                            
                                            	<!-- Grafico aqui -->
                                                <img src="images/temp/gr1.jpg" />
                                            	<!-- :: Grafico aqui -->
                                                
                                                <!-- Linha divisoria -->
                                                <div class="ldv"><div class="qt1"></div><div class="qt2"></div><div class="qb1"></div><div class="qb2"></div></div>
                                                <!-- :: Linha divisoria -->
                                                
                                            </div>
                                            <!-- :: Grafico 1 -->
                                            
                                            <!-- Grafico 2 -->
                                            <div class="stb">
                                            
                                            	<!-- Grafico aqui -->
                                                <img src="images/temp/gr2.jpg" />
                                            	<!-- :: Grafico aqui -->

                                            </div>
                                            <!-- :: Grafico2 -->
                                            
                                        </div>
                                        <!-- Conteudo interno 1 -->
                                    	
                                    </div>
                                    <!-- :: Capsula -->
                                    
                                </div>
                                <!-- :: Setor 1 -->
                                
								<!-- Setor 2 -->
                                <div class="setores">
                                	
                                    <!-- Capsula -->
                                    <div class="top_e">
                                    	
                                        <!-- Sort -->
                                        <div class="sort"></div>
                                        <!-- :: Sort -->
                                        
                                        <!-- Complemento -->
                                        <div class="scomp"></div>
                                        <!-- :: Complemento -->
                                    	
                                        <!-- Barra de titulo -->
                                        <div class="btit cf_tit">
                                        	<span>Últimos cadastros</span>
                                            <div class="mic">
                                            	<a href="xx" class="miz"></a>
                                                <a href="xx" class="fch"></a>
                                            </div>
                                        </div>
                                    	<!-- :: Barra de titulo -->
                                        
                                        <!-- Barra de configuracoes -->
                                        <div class="bconf">
                                        
											<!-- Selecionar todos -->
                                            <div class="sall">
                                            	<div><input name="" type="checkbox" value=""></div>
                                                <a href="#"></a>
                                            </div>
                                            <!-- :: Selecionar todos -->
                                        
                                        </div>
                                        <!-- :: Barra de configuracoes -->
                                        
                                    </div>
                                    <!-- :: Capsula -->
                                    
                                    <!-- Capsula -->
                                    <div class="cto_e2">

                                        <!-- Listagem -->
                                        <ul>
                                            <?php
                                                for ($i = 1; $i <= 5; $i++) {
                                            ?>
                                            <li>
                                                <div class="bus_e">
                                                	<div class="stop">
                                                    	<div class="fto"></div>
                                                        <div class="dinf">
                                                        	<p class="vl0">Tiago Campos</p>
                                                            <p class="vl1">João Pessoa(PB)</p>
                                                            <p class="vl2">Nascido em 28 dez 1983</p>
                                                        </div>
                                                        <input name="" type="checkbox" value="" />
                                                    </div>
                                                    <div class="sbot">
                                                    	<div class="lim"></div>
                                                        <span>981</span>
                                                        <div class="igen">
                                                        	<a href="xx" class="editar"></a>
                                                            <a href="xx" class="excluir"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <!-- :: Listagem -->
                        
                                    </div>
                                    <!-- :: Capsula -->
                                
                                </div>
                                <!-- :: Setor 2 -->
                                
								<!-- Setor 3 -->
                                <div class="setores">
                                	
                                    <!-- Capsula -->
                                    <div class="top_e">
                                    	
                                        <!-- Sort -->
                                        <div class="sort"></div>
                                        <!-- :: Sort -->
                                        
                                        <!-- Complemento -->
                                        <div class="scomp"></div>
                                        <!-- :: Complemento -->
                                    	
                                        <!-- Barra de titulo -->
                                        <div class="btit cf_tit">
                                        	<span>Lista de cadastros</span>
                                            <div class="mic">
                                            	<a href="xx" class="miz"></a>
                                                <a href="xx" class="fch"></a>
                                            </div> 
                                        </div>
                                    	<!-- :: Barra de titulo -->
                                        
                                        <!-- Barra de configuracoes -->
                                        <div class="bconf">

                                        </div>
                                        <!-- :: Barra de configuracoes -->
                                        
                                    </div>
                                    <!-- :: Capsula -->
                                    
                                    <!-- Capsula -->
                                    <div class="cto_e3">


                                        <!-- CRUD -->
                                        <table border="0" cellspacing="0" cellpadding="0">
                                        	<tr class="titulos"><td class="i1">Foto</td><td class="i2 cnt">Id</td><td class="i3">Nome</td><td class="i4 cnt">Data de nascimento</td><td class="i5 cnt">Cidade</td><td class="i6 cnt">Opções</td></tr>
											<?php
                                            	for ($i = 1; $i <= 5; $i++) {
                                            ?>
											<tr class="itens"><td><div class="ftoh"></div></td><td class="cnt">8120</td><td>Tiago Souza Neto</td><td class="cnt">28 dez 1983</td><td class="clc cnt">Campina Grande (PB)</td><td><div class="igen"><a href="xx" class="editar"></a><a href="xx" class="excluir"></a>
                                                        </div></td></tr>
											<?php } ?>
                                        </table>
                                        <!-- :: CRUD -->
                                    
                                    </div>
                                    <!-- :: Capsula -->
                                
                                </div>
                                <!-- :: Setor 3 -->
                                
                            </div>
                            <!-- :: Interno -->
                            
                        </div>
                        <!-- :: box_c -->
                        
                        <!-- box_d -->
                        <aside id="box_d" class="cfg_lin">
                            
                            <!-- Capsula : Alerta -->
                            <div class="sdb_e">
                            
                            	<div class="bme cf_tit">
                                	<span>Alertas</span> 
                                    <div class="mic">
                                        <a href="xx" class="miz"></a>
                                        <a href="xx" class="fch"></a>
                                    </div>
                                </div>
                            	
                                <ul class="cua">
                                	<li class="crc">
                                    	<div class="dta"><span class="dpe">Hoje</span></div>
                                        <div class="lkinf"><a href="#">Uma nova mensangem chegou em seu email, clique para conferir.</a></div>
                                        <a href="#" class="chk"></a>
                                    </li>
                                	<li>
                                    	<div class="dta"><span class="dpe">Ontem</span></div>
                                        <div class="lkinf"><a href="#">Arrocha o parafuso e pah.</a></div>
                                        <a href="#" class="chk"></a>
                                    </li>
                                	<li>
                                    	<div class="dta"><span class="dpe">23.02.02</span></div>
                                        <div class="lkinf"><a href="#">Sumiu 10 centavos do caixa. quem foi?</a></div>
                                        <a href="#" class="chk"></a>
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- :: Capsula : Alerta -->
                            
                            <!-- Capsula 
                            <div id="sdb_f">
                            	<div class="mnf cf_tit">
                                	<span>Ajuda</span>
                                </div>
                                
                                <div id="bct">
                                
                                    <div id="dvd">
                                        <label>Qual sua dúvida?</label>
                                        <div><input name="" type="text" class="txtinput"></div>
                                        <input name="" type="button" class="btninput" value="Buscar" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';">
                                    </div>

                                </div>
                                
                            </div>
                            Faq -->
                             
                            <!-- Capsula : Central de ajuda -->
                            <div id="sdb_f">
                            
                            	<!-- Barra de titulo -->
                            	<div class="mnf cf_tit">
                                	<span>Central de ajuda</span>
                                    <div class="mic">
                                        <a href="xx" class="miz"></a>
                                        <a href="xx" class="fch"></a>
                                    </div>
                                </div>
                                <!-- :: Barra de titulo -->
                                
                                <!-- Box conteudo interno -->
                                <div id="bci">
                                	
                                    <!-- Titulo do box -->
                                	<span class="tlo">Reportar problema</span>
                                	<!-- :: Titulo do box -->
                                     
                                	<!-- Menu -->
                                	<ul id="mnci">
                                    	<li><a class="ideia">Ideia</a></li>
                                        <li><a class="prob ins">Problema</a></li>
                                        <li><a class="perg">Pergunta</a></li>
                                        <li><a class="agrad in4">Agradecer</a></li>
                                    </ul>
                                    <!-- :: Menu -->
                                    
                                    <!-- Conteudo -->
                                    <div class="ito">
                                    
                                    	<div class="dvt">
                                        	<div>
                                            	<input name="" type="text" value="" class="txtinput">
                                            </div>
                                        </div>
                                        <div class="dvt hdb">
                                        	<label>Descrição</label>
											<div>
                                            	<textarea name="" cols="" rows="" class="txtinput"></textarea>
                                            </div>
                                    	</div>
                                    </div>
                                    <!-- :: Conteudo -->
                                    
                                    <!-- Postar -->
                                    <div class="btx">
                                    	<input name="" type="button" class="btninput" value="Postar problema" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';">
                                    </div>
                                    
                                </div>
                                <!-- :: Box conteudo interno -->
                                
                            </div>
                            <!-- :: Capsula : Central de ajuda -->
                            
                            <!-- Capsula : Publicidade -->
                            <div id="pbc">
                            	<span class="txpub">Publicidade</span>
                                <ul>
                                    <li>
                                        <a href="vagas">Vagas na unimed</a>
                                        <span>Unimed contra aqui, veja o número de vagas</span>
                                        <cite>www.unimed.com.br</cite>
                                    </li>
                                    <li>
                                        <a href="vagas">TeamViewer para reuniões</a>
                                        <span>Compre a licensa para 5 computadores e ganhe mais uma grátis</span>
                                        <cite>www.teamviewer.com.br</cite>
                                    </li>
                                    <li>
                                        <a href="vagas">Nexteon para Download</a>
                                        <span>Pacote com módulo interativo para reuniões presenciais e livre stream</span>
                                        <cite>www.nexton.com.br</cite>
                                    </li>
                                    <li>
                                        <a href="vagas">SQL Server 2012 para Download</a>
                                        <span>Baixe a última versão do SQL Server 2012 Professional Edition em menos de 1 hora</span>
                                        <cite>www.microsoft.com.br</cite>
                                    </li>
                                    <li>
                                        <a href="vagas">Suite Tools</a>
                                        <span>Ferramenta para gestão comercial de clientes, com opção de envio de SMS</span>
                                        <cite>www.suitetools.com.br</cite>
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- Capsula : Publicidade -->

                        </aside>
                        <!-- :: box_d -->
                        
                    </div>
                    <!-- :: box_y -->
                    
                </div>
                <!-- :: box_x -->
                
                <!-- Rodape -->
                <div id="rdp" class="cfg_lin">
                	<p>Oráculo Financeiro &copy; 2012</p>
                </div>
                <!-- :: Rodape -->
             
             </div>
             <!-- :: Box Capsula -->
                     
        </div>
        <!-- :: box -->
        
	</body>
    
</html>