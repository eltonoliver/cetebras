 <form id="form1" name="form1" method="post" action="orcamento.php"> 

                            <div class="box col-md-5">


                                <label> <span>Nome/Empresa: </span> 

                                <input type="text" class="input_text" name="empresa" id="empresa"/> </label> 



                                <label> <span>Email: </span>

                                 <input type="text" class="input_text" name="email" id="email"/> 


                              </label> 

                              <label> <span>Telefone: </span>

                                 <input type="text" class="input_text" name="numTel" id="numTel"/> 


                              </label> 

                              <label> <span>Numero de Pessoas: </span>

                                 <input type="text" class="input_text" name="numTel" id="numPessoas"/>


                              </label> 



                              <label> <span>Pacote: </span> 


                              <select class="input_text" name="pacotes">

                              <option value="">Pacotes</option>

                              <option  value="01">Celebrare 1</option>

                              <option value="02">Celebrare 2</option>

                              <option value="03" >Celebrare 3</option>


                              

                             </select>   
                              </label>



                              <label> <span>Pagamento: </span> 


                              <select class="input_text" name="formPag">

                              <option value="">Pagamento</option>

                              <option  value="01">Dinheiro</option>

                              <option value="02">Cartão</option>

                              <option value="03" >Cheque</option>


                              

                             </select>   

                            </label>

                             <label> 

                                <span>Data: </span> 

                                <input type="date" class="input_text" name="data" id="data"/> 

                            </label> 



                              <label> 

                                <span>Horario: </span> 

                                <input type="time" class="input_text" name="hora" id="hora"/> 

                            </label> 




                            <label> 

                                <span>Mensagem</span> 

                                <textarea class="message" name="feedback" id="feedback"></textarea>

                              </label>
                              <label>
                                 <input type="submit" class="button" value="Enviar" /> 

                             </label> 
                         </div> 
                     </form>
<?php 

echo $_GET['msg'];

?>                     

