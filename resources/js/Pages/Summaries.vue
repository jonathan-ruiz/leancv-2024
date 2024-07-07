<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Apexchart from "vue3-apexcharts/src/vue3-apexcharts.js";
import Map from "@/Components/Map/Map.vue";

const props = defineProps({
    dailyVisitsChart: Object,
    visitDeviceSourceChart: Object,
})
</script>

<template>
    <AppLayout title="Summaries">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Summaries
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="grid grid-cols-12 gap-8 mb-8">
                        <div class="col-span-12 p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">
                            <table class="table-auto w-full">
                                <thead class="bg-gray-300">
                                <tr>
                                    <th>Title</th>
                                    <th>Experiences</th>
                                    <th>Skills</th>
                                    <th>Prints</th>
                                    <th>Version</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>DevOps</td>
                                    <td>15</td>
                                    <td>37</td>
                                    <td>657</td>
                                    <td>2.4</td>
                                    <td>12/05/1989</td>
                                </tr>
                                <tr>
                                    <td>DevOps</td>
                                    <td>15</td>
                                    <td>37</td>
                                    <td>657</td>
                                    <td>2.4</td>
                                    <td>12/05/1989</td>
                                </tr>
                                <tr>
                                    <td>DevOps</td>
                                    <td>15</td>
                                    <td>37</td>
                                    <td>657</td>
                                    <td>2.4</td>
                                    <td>12/05/1989</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
