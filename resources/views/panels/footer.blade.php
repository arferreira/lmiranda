<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span class="right hide-on-small-only">&copy; <?= date('Y'); ?> <a href="https://api.whatsapp.com/send?phone=5567984463583&text=Ol%C3%A1%2C%20estou%20com%20uma%20d%C3%BAvida%20no%20sistema"
          target="_blank">iFollow Agência Digital</a> Todos os direitos reservados.
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->