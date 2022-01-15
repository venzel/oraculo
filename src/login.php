<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
		<title>Oráculo Financeiro - Login</title>	
        <meta name="description" content="Sistema Financeiro Oráculo" />
		<meta name="author" content="Almeida Júnior" />
        <link rel="stylesheet" href="lib/css/defaultoraculo.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="lib/css/loginoraculo.css" type="text/css" media="screen" />
	</head>
	
	<body>
    	
        <!-- Box -->
        <div id="box">

            <!-- Box centralizado -->
            <div id="bc_0">
            
                <!-- Borda superior -->
                <div id="bf1"></div>
                <!-- :: Borda superior -->
                
                <!-- Capsula 2 -->
                <div id="bc_1">
                    <div id="bc_2">
                        <div id="bc_3">
                            
                            <!-- Login e cadastro centro -->
                            <div id="loc">
                                
                                <!-- Setor logotipo -->
                                <div id="sta">
                                    <img src="images/oraculo.png" />
                                    <span>Seu gerenciador financeiro!</span>
                                    <div id="bdilc"></div>
                                </div>
                                <!-- :: Setor logotipo -->
                                
                                <!-- Setor login ........................................................ class="stb cbc" painel desativado -->
                                <div class="stb cbc">
                                    
                                    <!-- Capsula login -->
                                    <div class="lca_e cfl">
                                        <div class="tol">Acessar o sistema</div>
                                        
                                        <!-- Formulario -->
                                        <div class="blc_e">
                                        
                                            <!-- Login -->
                                            <div class="itpi">
                                                <div class="lipi">Login</div>
                                                <div class="bifo vlc">
                                                    <input name="" type="text" value="" class="txtinput login">
                                                    <span class="bol"><div></div>Informe seu login corretamente!</span>
                                                </div>
                                            </div>
                                            <!-- :: Login -->
                                            
                                            <!-- Senha -->
                                            <div class="itpi">
                                                <div class="lipi">Senha</div>
                                                <div class="bifo">
                                                    <input name="" type="text" value="" class="txtinput senha">
                                               </div>
                                            </div>
                                            <!-- :: Senha -->
                                            
                                            <!-- Lembrar-me -->
                                            <div class="pll">
                                                <div><input name="" type="checkbox" value="" id="lla" /></div><label for="lla">Lembrar-me!</label>
                                            </div>
                                            <!-- :: Lembrar-me -->
                                            
                                            <!-- Botao de acesso -->
                                            <div class="bac"><input name="" type="button" value="Acessar" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" /></div>
                                            <!-- Botao de acesso -->
                                            
                                        </div>
                                        <!-- :: Formulario -->
                                        
                                    </div>
                                    <!-- :: Capsula login -->
                                    
                                </div>
                                <!-- :: Setor login ........................................................ -->
                                
                                <!-- Setor cadastro ........................................................ apenas class="stb" painel desativado -->
                                <div class="stb">
                                
                                	<!-- Menssagem de sucesso de cadastro | class="smc sms" painel ativado -->
                                    <div class="msc">
                                        <span>Cadastro efetuado com sucesso!</span>
                                        <a href="xxx">Acessar painel administrativo</a>
                                    </div>
                                    <!-- :: Menssagem de sucesso de cadastro -->
                                    
                                    <!-- Capsula de formulario de cadastro -->
                                    <div class="lca_e cfc">
                                        <div class="tol">Criar minha conta</div>
                                        
                                        <!-- Formulario de cadastro -->
                                        <div class="blc_e">
                                        
                                            <!-- Email -->
                                            <div class="itpi">
                                                <div class="lipi">Email</div>
                                                <div class="bifo vlc">
                                                    <input name="" type="text" value="" class="txtinput login">
                                                    <span class="bol"><div></div>Informe seu e-mail corretamente!</span>
                                                </div>
                                            </div>
                                            <!-- :: Email -->
                                            
                                            <!-- Senha -->
                                            <div class="itpi">
                                                <div class="lipi">Senha</div>
                                                <div class="bifo">
                                                    <input name="" type="text" value="" class="txtinput senha">
                                               </div>
                                            </div>
                                            <!-- :: Senha -->
                                            
                                            <!-- Confirmar senha -->
                                            <div class="itpi">
                                                <div class="lipi cfsa">Confirmar senha</div>
                                                <div class="bifo">
                                                    <input name="" type="text" value="" class="txtinput senha">
                                               </div>
                                            </div>
                                            <!-- :: Confirmar senha -->
                                            
                                            <!-- Box dados -->
                                            <div class="bda">
                                                
                                                <!-- Esqueceu a senha -->
                                                <div class="klz"><span>Esqueceu sua senha?</span><a href="rec">Clique aqui!</a></div>
                                                <!-- :: Esqueceu a senha -->
                                                
                                                <!-- O que parece certo -->
                                                <div class="oqc">
                                                    <span class="txoc">O que parece certo?</span>
                                                    <div class="foc">
                                                        <div class="fcx_e">
                                                            <div><input name="" type="radio" value="" id="pc1" /></div><label for="pc1">02/14/11</label>
                                                            <div class="chi2"><input name="" type="radio" value="" id="pc2" /></div><label for="pc2">14/02/11</label><span class="chck"></span>
                                                         </div>
                                                    </div>
                                                </div>
                                                <!-- :: O que parece certo -->
                                                
                                                <!-- Termos de uso -->
                                                <div id="tmu">
                                                    <div id="tmx_e">
                                                        <div><input name="" type="checkbox" value="" id="tou" /></div><label for="tou">Eu li e aceito os</label> <a href="term">termos de uso</a><span class="chck"></span>
                                                    </div>
                                                </div>
                                                <!-- :: Termos de uso -->
                                                
                                            </div>
                                            <!-- :: Box dados -->
                                            
                                            <!-- Botao de efetuar cadastro -->
                                            <div class="bac bch"><input name="" type="button" value="Efetuar cadastro" class="btninput" onmouseover="this.className='btninput_h';" onmouseout="this.className='btninput';" /></div>
                                            <!-- :: Botao de efetuar cadastro -->
                                            
                                            <!-- Acessar atraves de redes sociais -->
                                            <div id="ars">
                                                <div></div>
                                                <span>Ou acesse usando</span>
                                                <ul>
                                                    <li><a href="xxxx">Facebook</a></li>
                                                    <li><a href="xxxx">Twitter</a></li>
                                                    <li><a href="xxxx">Google</a></li>
                                                    <li class="ciu"><a href="xxxx">Yahoo</a></li>
                                                </ul>
                                            </div>
                                            <!-- :: Acessar atraves de redes sociais -->
                                            
                                        </div>
                                        <!-- :: Formulario de cadastro -->
                                        
                                    </div>
                                    <!-- :: Capsula de formulario de cadastro -->
                                    
                                </div>
                                <!-- :: Setor cadastro ........................................................ -->
                                
                            </div>
                            <!-- :: Login e cadastro centro -->

                        </div>
                    </div>
                </div>
                <!-- :: Capsula 2 -->
                
                <!-- Rodape -->
                <div id="rdp">
                    
                    <!-- Capsula rodape 1 -->
                    <div id="rpe_e">
                        <ul>
                            <li><a href="xx">Termos de uso</a></li>
                            <li><a href="xx">Política de privacidade</a></li>
                            <li><a href="xx">Política anti-span</a></li>
                            <li class="uil"><a href="xx">Declaração de segurança</a></li>
                            <li><a href="xx">Tutoriais</a></li>
                            <li><a href="xx">Respostas e perguntas frequentes</a></li>
                            <li class="uil"><a href="xx">Entre em contato com o suporte</a></li>
                        </ul>
                        <div id="copy">&copy; 2012 ASS Componentes Ltda - Oráculo. Todos os direitos reservados</div>
                    </div>
                    <!-- Capsula rodape 1 -->
                
                </div>
                <!-- Rodape -->
                
            </div>
            <!-- :: Box centralizado -->
        
        </div>
        <!-- :: Box -->
        
	</body>
    
</html>