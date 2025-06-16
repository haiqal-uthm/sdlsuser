<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Staff ID</label>
    <input type="text" name="staff_id" class="form-control" value="{{ old('staff_id', $user->staff_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label>RFID ID</label>
    <input type="text" name="rfid_id" class="form-control" value="{{ old('rfid_id', $user->rfid_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Position</label>
    <input type="text" name="position" class="form-control" value="{{ old('position', $user->position ?? '') }}" required>
</div>
@if (!isset($user))
<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
</div>
@endif
