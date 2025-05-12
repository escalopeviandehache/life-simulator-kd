<script setup>
  import { useFetchJson } from '@/composables/useFetchJson';

  const { data: test } = useFetchJson('test');
  const { data: delTest, error: delError} = useFetchJson({url: 'test', method: 'DELETE' });

  const {
    data: time,
    error: timeError,
    loading: timeLoading,
    execute: executeTimeFetch,
    abort: abortTimeFetch
  } = useFetchJson({url: 'time', immediate: false});

  function timeFetch() {
    executeTimeFetch({timeClient: new Date()});
  }
</script>

<template>
  <div>
    <h1>Page Example</h1>
    <p>{{ test }}</p>
    <p>{{ delTest }}</p>
    <p>{{ delError }}</p>
    <button @click="timeFetch()" :disabled="timeLoading">
      Fetch time
    </button>
    <button @click="abortTimeFetch()" :disabled="!timeLoading">
      Abort
    </button>
    <p v-if="timeLoading">Loading...</p>
    <p v-if="time">{{ time }}</p>
    <p v-if="timeError">{{ timeError }}</p>
  </div>
</template>

<style scoped>

</style>