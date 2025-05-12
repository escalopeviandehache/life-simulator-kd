import { ref } from 'vue';
import { fetchJson } from '@/utils/fetchJson';

/**
 * Composable to fetch JSON data with optional immediate execution.
 * This composable does not handle concurrent requests
 * Use multiple instances of this composable if you need to handle multiple concurrent requests.
 *
 * @param {Object|string} options - Either a configuration object with request parameters, or a URL string (in which case defaults are applied to other parameters)
 * @param {string} options.url - Relative request URL (required)
 * @param {Object|null} [options.data=null] - Data to send (body or query string)
 * @param {string|null} [options.method=null] - HTTP method (GET, POST, etc.)
 * @param {Object} [options.headers={}] - Additional headers
 * @param {number} [options.timeout=5000] - Timeout in milliseconds
 * @param {string|null} [options.baseUrl=null] - Custom base URL for this request
 * @param {boolean} [options.immediate=true] - Fetch immediately on setup.
 * @returns {Object} Reactive refs and control functions.
 */
export function useFetchJson(options) {
  const data = ref(null);
  const error = ref(null);
  const loading = ref(false);

  const fetchOptions = typeof options === 'string' ? { url: options } : options;
  const immediate = fetchOptions.immediate !== false;
  let curAbort = () => {};

  function execute(dataOverride = undefined) {
    loading.value = true;
    data.value = null;
    error.value = null;

    const finalOptions = { ...fetchOptions };
    if (dataOverride !== undefined) finalOptions.data = dataOverride;

    const { request, abort: newAbort } = fetchJson(finalOptions);
    curAbort = newAbort;

    request
      .then(res => data.value = res)
      .catch(err => error.value = err)
      .finally(() => {
        loading.value = false;
        curAbort = () => {};
      });
  };

  if (immediate) execute();

  return { data, error, loading, execute, abort: () => curAbort() };
}