<script type="text/javascript" src="{{url('assets/js/simpleLed_card.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/card.js')}}"></script>

<div class="container container-card mt-4 p-2 w-25 border">
    <?php $titleCard = "RGB Led"; ?>
    @include('layotus.partials.cards.component.dropdownCornerMenu')

    <div class="row justify-content-center">
        <div class="col d-flex justify-content-center">
            <input type="color" class="form-control form-control-color" id="input-rgb-led-color" value="#000000" title="Choose your color">
        </div>
    </div>
</div>