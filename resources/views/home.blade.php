@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card">
                    <div class="card-header">Copy to clipboard</div>

                    <div class="card-body">
                            <button class="btn btn-primary mx-2" id="btn-copy" onclick="copy('HALLOW10')">
                                Copy
                            </button>
                            <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/
                            id1185232807" target="_blank" rel="noopener noreferrer">
                                <img class="mx-2" src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="">
                            </a>
                            <a href="https://www.floweradvisor.com.ph/flowersphilippines" class="btn btn-primary mx-2" target="_blank" rel="noopener noreferrer">
                            Someone's Day
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copy(copyText) {
            navigator.clipboard.writeText(copyText);
            alert("Copied the text: " + copyText);
        }
    </script>
@endsection
