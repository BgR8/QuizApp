<x-app-layout>
    <x-slot name="header">
        Quiz Oluştur
    </x-slot>
    <p></p>
    <div class="card">
        <div class="card-body">
            <form action="{{route('quizzes.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Quiz Açıklama</label>
                    <textarea name="description" class="form-control" cols="30" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="Bitiş Tarihi"></label>
                    <input type="datetime-local" name="finished_at" class="form-control">
                    <br>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>