<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 pt-5">
            @if(!Auth::user()->is_revisor)
                <h1 class="text-center pb-5">Work with us</h1>
                <p class="text-center">Tell us why you want work with PRESTO</p>
                <livewire:revisor-form>
            @else
                    <h4 class="alert alert-success text-center"> You're already a revisor</h4>
                    <div class="d-flex justify-content-center  align-items-center flex-column">
                        <h4>Press to view your Reviewing Zone</h4>
                        <a href="{{route('revisor_index')}}" class=" btn btn-custom">Go!</a>
                    </div>
                    @endif
            </div>
        </div>
    </div>



</x-layout>
