<div class="permanents__modal">
    <span id="permanents__close">
        <i class="fas fa-times"></i>
    </span>
    <div id="permanents__team">
        <h2>Liste des permanents</h2>

        <div class="container-card">
            @foreach(\App\Models\Permanents::select('firstname', 'lastname', 'fonction', 'avatar')->get() as $permanent)
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ Storage::url($permanent->avatar) }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h3>{{$permanent->lastname}} {{$permanent->firstname}}<br />
                            <span>{{$permanent->fonction}}</span></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>