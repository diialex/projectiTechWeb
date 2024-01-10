                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h4> Registration Form </h4> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your user</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Name </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Last name </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Gender </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Man</option>
										<option>Woman</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
                                    Are you already registered?
									<a href="#tologin" class="to_register"> Log in </a>
								</p>
                            </form>