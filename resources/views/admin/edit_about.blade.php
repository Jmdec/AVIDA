<!-- admin/edit_about.blade.php -->

<form action="{{ route('admin.about.update', $about->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="vision_mission">Vision & Mission</label>
        <textarea class="form-control" id="vision_mission" name="vision_mission" rows="4">{{ $about->vision_mission }}</textarea>
    </div>
    <!-- Add other fields similarly -->

    <button type="submit" class="btn btn-primary">Update</button>
</form>
