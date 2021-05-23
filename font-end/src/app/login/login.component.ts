import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { ServiceService } from '../service.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  @Output() cadastroEvent = new EventEmitter<boolean>();

  formLogin = this.formBuilder.group({
    email: '',
    senha: ''
  });

  formCadastro = this.formBuilder.group({
    emailCadastro: ''
  });

  constructor(
    private formBuilder: FormBuilder,
    private service: ServiceService
  ) { }

  ngOnInit(): void {

  }

  funcaoNaoImplementada(){
    alert("Função ainda não implementada!");
    return;
  }

  submit(){
    console.log(this.formLogin.value);
    if (this.formLogin.value.email !== "" && this.formLogin.value.senha !== ""){
        this.service.login(this.formLogin.value.email, this.formLogin.value.senha).subscribe(res => {
          if (res.id)
            alert("Usuário com id " + res.id + " logado com sucesso!");
          else {
            alert("Login falhou");
          }
        });
    }else{
      alert("Preencha todos os campos");
    }
  }

  cadastro(){
    if(this.formCadastro.value.emailCadastro !== ""){
      this.service.setEmail(this.formCadastro.value.emailCadastro);
      console.log(this.service.getEmail());
      this.cadastroEvent.emit(true);
    }else{
      alert("Para realizar o cadastro adicione seu e-mail.");
    }
  }


}
