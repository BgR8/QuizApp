<x-app-layout>
    <x-slot name="header">
        Quiz Güncelle
    </x-slot>
    <p></p>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.update', $quiz->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div>
                <div class="form-group">
                    <label>Quiz Açıklama</label>
                    <textarea name="description" class="form-control" cols="30" rows="4">{{$quiz->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control" @if ($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at)) }} @endif">
                    <br>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Düzenle</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>