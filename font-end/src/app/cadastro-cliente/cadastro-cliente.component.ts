import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { ServiceService } from '../service.service';


@Component({
  selector: 'app-cadastro-cliente',
  templateUrl: './cadastro-cliente.component.html',
  styleUrls: ['./cadastro-cliente.component.css']
})


export class CadastroClienteComponent implements OnInit {
  @Output() cadastroEvent = new EventEmitter<boolean>();


  formCadastro = this.formBuilder.group({
    nome: '',
    data: '',
    cpf: '',
    genero: '',
    email: '',
    senha: '',
    rua: '',
    cidade: '',
    cep: '',
    estado: '',
    numero: '',
    bairro: '',
    complemento: '',
    celular: '',
    telefone: ''

  });
  
  constructor(
    private formBuilder: FormBuilder,
    private service: ServiceService
  ) { }

  ngOnInit(): void {
    
  }

  mudaGenero(){
    console.log();  
    //this.formCadastro.value.genero = genero;

  }

  pegaEmail(){
    return this.service.getEmail();
  }

  validaFormBuilder(){
    if ((
      this.formCadastro.value.nome !== "" &&
      this.formCadastro.value.data !== "" &&
      this.formCadastro.value.cpf !== "" &&
      this.formCadastro.value.senha !== "" &&
      this.formCadastro.value.rua !== "" &&
      this.formCadastro.value.cidade !== "" &&
      this.formCadastro.value.cep !== "" &&
      this.formCadastro.value.estado !== "" &&
      this.formCadastro.value.numero !== "" &&
      this.formCadastro.value.bairro !== "" &&
      this.formCadastro.value.complemento !== "" &&
      this.formCadastro.value.celular !== "" &&
      this.formCadastro.value.telefone !== "" )
      &&
      (this.formCadastro.value.nome  !== undefined &&
      this.formCadastro.value.data  !== undefined &&
      this.formCadastro.value.cpf  !== undefined &&
      this.formCadastro.value.senha  !== undefined &&
      this.formCadastro.value.rua  !== undefined &&
      this.formCadastro.value.cidade  !== undefined &&
      this.formCadastro.value.cep  !== undefined &&
      this.formCadastro.value.estado  !== undefined &&
      this.formCadastro.value.numero  !== undefined &&
      this.formCadastro.value.bairro  !== undefined &&
      this.formCadastro.value.complemento  !== undefined &&
      this.formCadastro.value.celular  !== undefined &&
      this.formCadastro.value.telefone  !== undefined ))
        return true;

      return false;
  }

  cadastro(){
      if (this.validaFormBuilder()){
        console.log(this.formCadastro.value);
        this.cadastroEvent.emit(false);
      }else {
        alert("Preencha todos os campos");
      }
     
  }

}
