<?php
namespace ideasonpurpose;

/**
 * Collection of reusable, optimized SVG elements.
 */
class SVG extends SVG\SVG
{
    // Social media icons
    public static $facebook = '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 27"><path id="facebook" fill="#FFF" d="M.677 13.981c0-7.18 5.82-13 13-13s13 5.82 13 13-5.82 13-13 13-13-5.82-13-13zm13.395 8.984V14.77h2.758l.413-3.195h-3.171v-2.04c0-.925.258-1.554 1.587-1.554h1.694V5.123c-.293-.04-1.3-.127-2.47-.127-2.444 0-4.118 1.489-4.118 4.223v2.354H8v3.196h2.764v8.195h3.306z"></path> </svg> ';
    public static $twitter = '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"><path id="twitter" fill="#FFF" d="M.85 13.596c0-7.18 5.82-13 13-13s13 5.82 13 13-5.82 13-13 13-13-5.82-13-13zm9.847 6.91c6.415 0 9.924-5.316 9.924-9.927 0-.15-.003-.302-.01-.45a7.067 7.067 0 0 0 1.74-1.808 6.934 6.934 0 0 1-2.004.55 3.502 3.502 0 0 0 1.535-1.93 7.005 7.005 0 0 1-2.215.846 3.489 3.489 0 0 0-6.034 2.387c0 .273.03.54.09.795a9.898 9.898 0 0 1-7.189-3.646 3.488 3.488 0 0 0 1.079 4.659 3.462 3.462 0 0 1-1.579-.437v.045a3.49 3.49 0 0 0 2.797 3.421 3.526 3.526 0 0 1-1.574.06 3.489 3.489 0 0 0 3.257 2.423 6.994 6.994 0 0 1-4.332 1.493c-.28 0-.558-.015-.832-.047a9.878 9.878 0 0 0 5.347 1.566z"/> </svg>';
    public static $instagram = '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"><path id="instagram" fill="#FFF" d="M.132 13.894c0-7.18 5.82-13 13-13s13 5.82 13 13-5.82 13-13 13-13-5.82-13-13zm13.167-8.527c-2.389 0-2.688.01-3.626.053-.936.043-1.576.19-2.135.407a4.284 4.284 0 0 0-1.557 1.01c-.49.486-.79.975-1.015 1.551-.218.556-.366 1.193-.409 2.125-.043.934-.053 1.232-.053 3.61 0 2.38.01 2.677.053 3.61.043.933.191 1.57.409 2.126a4.282 4.282 0 0 0 1.015 1.551c.488.487.978.786 1.557 1.01.559.217 1.199.364 2.135.407.938.043 1.237.053 3.626.053 2.388 0 2.688-.01 3.626-.053.936-.043 1.575-.19 2.135-.407a4.314 4.314 0 0 0 1.557-1.01 4.308 4.308 0 0 0 1.015-1.55c.217-.558.365-1.194.408-2.127.043-.933.053-1.23.053-3.61 0-2.378-.01-2.676-.053-3.61-.043-.932-.191-1.569-.408-2.125a4.3 4.3 0 0 0-1.015-1.55 4.301 4.301 0 0 0-1.557-1.01c-.56-.218-1.199-.365-2.135-.408-.938-.043-1.238-.053-3.626-.053zm0 1.578c2.348 0 2.626.01 3.554.051.857.04 1.323.182 1.633.302.41.158.703.348 1.01.654.309.307.499.6.658 1.007.121.308.264.772.303 1.626.043.924.052 1.2.052 3.538 0 2.34-.009 2.615-.052 3.54-.039.852-.182 1.316-.303 1.625-.159.408-.349.7-.658 1.007-.307.305-.6.496-1.01.654-.31.12-.776.263-1.633.302-.928.042-1.206.051-3.554.051-2.349 0-2.627-.009-3.554-.05-.857-.04-1.323-.183-1.633-.303a2.72 2.72 0 0 1-1.011-.654 2.726 2.726 0 0 1-.658-1.007c-.121-.309-.264-.773-.303-1.626-.042-.924-.051-1.2-.051-3.539 0-2.338.009-2.614.051-3.538.039-.854.182-1.318.303-1.626.16-.408.35-.7.658-1.007.307-.306.6-.496 1.011-.654.31-.12.776-.263 1.633-.302.927-.042 1.205-.05 3.554-.05zm-4.795 6.908c0 2.483 2.021 4.498 4.517 4.498 2.494 0 4.515-2.015 4.515-4.498s-2.021-4.496-4.515-4.496c-2.496 0-4.517 2.013-4.517 4.496zm8-4.445c0 .58.472 1.05 1.056 1.05a1.051 1.051 0 1 0 0-2.101c-.584 0-1.056.47-1.056 1.05zm-3.483 7.364a2.926 2.926 0 0 1-2.932-2.92 2.926 2.926 0 0 1 2.932-2.917 2.925 2.925 0 0 1 2.93 2.918 2.926 2.926 0 0 1-2.93 2.919z"></path> </svg>';
    public static $linkedin = '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"><path id="linkedin" fill="#FFF" d="M.5 13.5c0-7.18 5.82-13 13-13s13 5.82 13 13-5.82 13-13 13-13-5.82-13-13zm20.378 7.378v-5.574c0-3.104-1.606-4.547-3.65-4.547-1.647 0-2.68.982-2.87 1.67v-1.574h-3.232c.042.836 0 10.025 0 10.025h3.231v-5.424c0-.302-.013-.604.07-.82.223-.603.7-1.228 1.558-1.228 1.122 0 1.632.926 1.632 2.284v5.188h3.261zM6.494 10.853v10.024H9.37V10.853H6.494zM7.859 9.6c1.08 0 1.754-.77 1.754-1.74-.02-.99-.673-1.738-1.734-1.738-1.062 0-1.757.75-1.757 1.741 0 .97.675 1.737 1.716 1.737h.02z"></path></svg>';
    public static $vimeo = '<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"><path id="vimeo" fill="#FFF" fill-rule="nonzero" d="M.5 13.5c0-7.18 5.82-13 13-13s13 5.82 13 13-5.82 13-13 13-13-5.82-13-13zm17.242 4.292c2.106-2.821 3.198-5.045 3.268-6.671.097-2.172-.683-3.286-2.334-3.334-2.229-.075-3.737 1.225-4.53 3.898a2.955 2.955 0 0 1 1.187-.261c.814 0 1.174.472 1.077 1.422-.049.576-.406 1.412-1.077 2.512-.672 1.098-1.175 1.647-1.51 1.647-.432 0-.826-.848-1.186-2.547-.12-.5-.336-1.774-.645-3.824-.29-1.899-1.057-2.787-2.301-2.66-.528.051-1.32.55-2.371 1.5-.769.723-1.547 1.45-2.338 2.172l.755 1.014c.72-.526 1.138-.789 1.257-.789.551 0 1.066.9 1.547 2.7.431 1.646.861 3.297 1.294 4.949.646 1.799 1.437 2.696 2.37 2.696 1.51 0 3.357-1.474 5.537-4.424z"></path></svg>';
}
