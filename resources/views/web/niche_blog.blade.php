@extends('layouts.web.main-layout')

@section('title', 'home-page')

@section('content')

<div class="bg-white shadow-xl rounded-xl p-6">
    <div class="overflow-x-auto rounded-xl border border-gray-200">
        <table class="min-w-full table-auto">
            <thead class="bg-gradient-to-r from-primary to-purple-600 text-white text-sm">
                <tr>
                    
                    {{-- <th class="px-4 py-3">ID</th> --}}
                    <th class="px-4 py-3">Website Name</th>
                    <th class="px-4 py-3">Site URL</th>
                    <th class="px-4 py-3">Niche</th>
                    <th class="px-4 py-3">DA</th>
                    <th class="px-4 py-3">DR</th>
                    <th class="px-4 py-3">Traffic</th>
                    <th class="px-4 py-3">Mail</th>
                </tr>
            </thead>

            <tbody class="text-center divide-y divide-gray-100">
                @if ($pagination->isNotEmpty())
                    @foreach ($pagination as $blog)
                        <!-- Row -->
                        <tr class="hover:bg-gray-50 cursor-pointer transition"
                            data-target="#expandRow{{ $blog['blog_id'] }}"
                            data-blog-id="{{ $blog['blog_id'] }}">
                            
                           

                            {{-- <td class="px-4 py-3 font-semibold text-gray-900">
                                #{{ $blog['blog_id'] }}
                            </td> --}}

                            <td class="px-4 py-3 font-medium text-gray-700">
                                {{ $blog['website_name'] ?? '—' }}
                            </td>

                            <td class="px-4 py-3">
                                 {{ $blog['website_niche'] ?? '—' }}
                            </td>

                            <td class="px-4 py-3">{{ $blog['website_niche'] ?? '—' }}</td>
                            <td class="px-4 py-3">{{ $blog['moz_da'] ?? '—' }}</td>
                            <td class="px-4 py-3">{{ $blog['ahrefs_dr'] ?? '—' }}</td>
                            <td class="px-4 py-3">{{ $blog['ahrefs_traffic'] ?? '—' }}</td>

                            <td class="px-4 py-3" onclick="event.stopPropagation();">
                                <button class="bg-primary hover:bg-purple-800 text-white text-xs font-semibold px-3 py-2 rounded-xl shadow-md transition"
                                    data-url="{{ route('blog.viewMail', encrypt($blog['blog_id'])) }}">
                                    Send Mail
                                </button>
                            </td>
                        </tr>

                        <!-- Expandable Details -->
                        <tr id="expandRow{{ $blog['blog_id'] }}" class="hidden bg-gray-50">
                            <td colspan="9" class="p-4 text-left text-gray-600">
                                <div class="space-y-1">
                                    <div><span class="font-semibold">Website:</span> {{ $blog['website_name'] }}</div>
                                    <div><span class="font-semibold">URL:</span> {{ $blog['site_url'] }}</div>
                                    <div><span class="font-semibold">Niche:</span> {{ $blog['website_niche'] }}</div>
                                    <div><span class="font-semibold">DA:</span> {{ $blog['moz_da'] }}</div>
                                    <div><span class="font-semibold">DR:</span> {{ $blog['ahrefs_dr'] }}</div>
                                    <div><span class="font-semibold">Traffic:</span> {{ $blog['ahrefs_traffic'] }}</div>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                @else
                    <tr>
                        <td colspan="9" class="text-center py-6 text-gray-600 font-semibold">
                            No blogs found.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

</script>
@endsection
