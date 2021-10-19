<div class="directors__modal">
    <span id="directors__close">
        <i class="fas fa-times"></i>
    </span>
    <div id="directors__team">
        <h2>Liste des membres du Conseil d'administration de l'Association Intermédiaire de Verberie</h2>

        <div class="container-card">
            @foreach(\App\Models\Directors::select('firstname', 'lastname', 'fonction', 'avatar')->get() as $director)
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('storage/' . $director->avatar) }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h3>{{$director->lastname}} {{$director->firstname}}<br />
                            <span>{{$director->fonction}}</span></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>