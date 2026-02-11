<form action="{{ route('prisoners.store') }}" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="national_id" placeholder="National ID">
    <input type="text" name="prisoner_number" placeholder="Prisoner Number">
    <input type="text" name="prisoner_card_id" placeholder="Prisoner Card ID">
    <input type="text" name="phone_number" placeholder="Phone Number">
    <input type="text" name="date_of_birth" placeholder="Date of Birth">
    <input type="text" name="entry_date" placeholder="Entry Date">
    <input type="text" name="is_active" placeholder="Is Active">
    <button type="submit">Create</button>
</form>