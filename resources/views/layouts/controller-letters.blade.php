<div ng-controller="LettersController">
    <div class="row">
        <form ng-submit="submit()" method="post">
        {{csrf_field()}}
        <div class="col">
    <div class="d-flex m-2 head">
        <img src="" alt="">
        <div>
            <p>تست 1</p>
            <p>تست 2</p>
            <p>تست 3</p>
        </div>
        <div>
            <p>پیوست : </p>
            <p>تاریخ : </p>
            <p>شماره : </p>
        </div>
    </div>

    <div class="body">
        <textarea name="" id="" cols="100" rows="500" placeholder="متن نامه خود را وارد کیند"></textarea>
    </div>

    <div class="foot">
        <p>امضاء</p>
    </div>
</div>


      

        </form>
    </div>
</div>

