<x-layout>

  <x-card-body :$job />

  <x-cardcomponent>
    <h2 class="mb-4 text-lg font-medium">
      Your Job Application
    </h2>

    <form action="{{ route('jobs.application.store', $job) }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="expected_salary"
          class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
        <x-text-input type="number" name="expected_salary" />
      </div>

      <x-button class="w-full">Apply</x-button>
    </form>
  </x-cardcomponent>

</x-layout>
