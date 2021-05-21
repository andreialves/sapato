import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';

@Component({
  selector: 'app-cadastro-cliente',
  templateUrl: './cadastro-cliente.component.html',
  styleUrls: ['./cadastro-cliente.component.css']
})
export class CadastroClienteComponent implements OnInit {

  formCadastro = this.formBuilder.group({
    email: '',
    senha: ''
  });
  
  constructor(
    private formBuilder: FormBuilder
  ) { }

  ngOnInit(): void {

  }

  submit(){
    console.log("Oi");
  }

}
