@extends('layouts.account')

<!--
  In this file we will talk about how to change the password
  for a user. A user can simply can change his password by 
  full fill some requirements which is needed for the system
  to acknowlede the user as an individual user. 
-->

@section('content')
  <div class="account-layout  border">
    <div class="account-hdr bg-primary text-white border">
      Change Password
    </div>
    <div class="account-bdy p-3">
      <form action="{{route('account.changePassword')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">

<!--
  Here the system will asked for the old password
  to check if this user really hold this account in previous
  time, if the older password is correct then the system will
  acquire him as real user of this account and start the
  procedure for changing password of the account.
-->

          <input type="password" placeholder="Current Password *" class="form-control @error('current_password') is-invalid @enderror" name="current_password" value="{{ old('current_password') }}" required>
            @error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<!--
  Some necessary requirements for the password like (password
  must be 8 character, lower case and upper case required etc.)
-->

        <p class="mt-3  alert alert-primary">Password must be 8 characters with 1 special character</p>
        <div class="form-group">
          <input type="password" placeholder="New Password*" class="form-control @error('new_password') is-invalid @enderror" name="new_password" value="{{ old('new_password') }}" required>
            @error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<!--
  New password confirmation and last stage for the password change process.
  If any user wish not to change his password then simply just click on the
  cancle button and the system will automatically handle all the back end
  procedure and the password will remain unchanged.
-->

        <div class="form-group">
          <input type="password" placeholder="Confirm Password *" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="{{ old('confirm_password') }}" required>
            @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="line-divider"></div>
        <div class="mt-3">
          <button type="submit" class="btn primary-btn">Change Password</button>
          <button class="btn primary-outline-btn">Cancel</button>
        </div>
      </form>
    </div>
  </div>
@endSection

@push('css')

@endpush