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
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="grid grid-cols-12 gap-8 mb-8">
                        <div class="col-span-12 p-8 bg-white overflow-hidden shadow-md sm:rounded-lg">
                            <h3>Daily views</h3>
                            <apexchart :width="dailyVisitsChart.width" :height="dailyVisitsChart.height"
                                       :type="dailyVisitsChart.type"
                                       :options="dailyVisitsChart.options" :series="dailyVisitsChart.series"></apexchart>
                        </div>
                        <div class="col-span-4 p-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <h3>Total views by device type</h3>
                            <div class="flex items-center justify-center h-full -mt-8">
                            <apexchart :width="visitDeviceSourceChart.width" :height="visitDeviceSourceChart.height"
                                       :type="visitDeviceSourceChart.type"
                                       :options="visitDeviceSourceChart.options"
                                       :series="visitDeviceSourceChart.series"></apexchart>
                            </div>
                        </div>
                        <div class="col-span-8 p-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <h3>Views by country heat map</h3>
                            <Map :country-data="{
                              US: 100,
                              CA: 120,
                              UK: 100,
                              ES: 130,
                            }"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
