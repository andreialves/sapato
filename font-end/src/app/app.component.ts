import { Component, Output } from '@angular/core';
import { CadastroClienteComponent } from './cadastro-cliente/cadastro-cliente.component'

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {

    cadastro: boolean = false;

    cadastros(cad:boolean){
      this.cadastro = cad;
    }
  
}

