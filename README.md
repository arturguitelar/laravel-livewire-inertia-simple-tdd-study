# Estudo de TDD criado com Laravel 8 + Livewire + Inertia

Inicialmente este repositório foi criado para estudos de Laravel com TDD, seguindo o tutorial da playlist do canal [Coder's Tape](https://www.youtube.com/channel/UCQI-Ym2rLZx52vEoqlPQMdg).
Porém, eu iniciei o tutorial criando o projeto com **Laravel 8**, que é uma versão posterior a que é usada no tutorial, então alguns detalhes do código estão atualizados para esta versão.

Mas as idéias centrais e boa parte do código (principalmente no que se diz respeito ao TDD) ainda estão fiéis ao tutorial.

Existe uma parte do tutorial onde é preciso criar o scaffold para autenticação, onde o autor cria com a antiga ferramenta que era utilizada para este fim.
Porém, mesmo podendo realizar um procedimento semelhante utilizando [Laravel/UI](https://github.com/laravel/ui), atualmente a documentação do Laravel 8 incentiva a utlizar o [Laravel Jetstream](https://laravel.com/docs/8.x/starter-kits#laravel-jetstream), e foi o que eu tentei implementar aqui.

A escolha do pacote com [Inertia](https://inertiajs.com/) foi um pouco acidental mas veio bem a calhar. Em uma das aulas da playlist está marcado "Importing Vue.js & Tailwind" e isso me influenciou a escolher essa opção de instalação, mas a verdade é que nada de Vuejs é utilizado no tutorial. *haha* Então implementei o frontend utilizando VueJs mas com as tags e classes html do tutorial pra tentar me manter fiel.

Atualmente a playlist está no [vídeo 6](https://www.youtube.com/watch?v=ntNVo9qS6qA&list=PLpzy7FIRqpGAbkfdxo1MwOS9xjG3O3z1y&index=6) e faz um certo tempo que não foi atualizada. Mesmo assim vou dar uma pausa para estudar outras coisas antes de tentar criar as outras telas do frontend.

De qualquer forma, o objetivo era o entendimento sobre o processo de TDD em uma aplicação real e minhas expectativas foram atendidas.

Link da playlist, para quem quiser tentar fazer o mesmo (em inglês):
[Test Driven Laravel](https://www.youtube.com/playlist?list=PLpzy7FIRqpGAbkfdxo1MwOS9xjG3O3z1y)

