import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  
  formLogin = this.formBuilder.group({
    email: '',
    senha: ''
  });

  formCadastro = this.formBuilder.group({
    emailCadastro: ''
  });

  constructor(
    private formBuilder: FormBuilder
  ) { }

  ngOnInit(): void {

  }

  submit(){
    console.log(this.formLogin.value);
    
  }
}
