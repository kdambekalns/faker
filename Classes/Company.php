<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Company class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Company extends Faker
{
    /**
     * Some company name formats.
     *
     * @var array
     */
    protected static $formats = array(
        array('format' => '%s %s', 'parts' => array(array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Company', 'suffix'))),
        array('format' => '%s-%s', 'parts' => array(array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Name', 'lastName'))),
        array('format' => '%s, %s and %s', 'parts' => array(array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Name', 'lastName')))
    );

    /**
     * Some company name suffixes.
     *
     * @var array
     */
    protected static $suffixes = array(
        'Inc',
        'and Sons',
        'LLC',
        'Group'
    );

    /**
     * Some catch phrase parts, wordlist from http://www.1728.com/buzzword.htm
     *
     * @var array
     */
    protected static $catchPhraseParts = array(
        array('Adaptive', 'Advanced', 'Ameliorated', 'Assimilated', 'Automated', 'Balanced', 'Business-focused', 'Centralized', 'Cloned', 'Compatible', 'Configurable', 'Cross-group', 'Cross-platform', 'Customer-focused', 'Customizable', 'Decentralized', 'De-engineered', 'Devolved', 'Digitized', 'Distributed', 'Diverse', 'Down-sized', 'Enhanced', 'Enterprise-wide', 'Ergonomic', 'Exclusive', 'Expanded', 'Extended', 'Face to face', 'Focused', 'Front-line', 'Fully-configurable', 'Function-based', 'Fundamental', 'Future-proofed', 'Grass-roots', 'Horizontal', 'Implemented', 'Innovative', 'Integrated', 'Intuitive', 'Inverse', 'Managed', 'Mandatory', 'Monitored', 'Multi-channelled', 'Multi-lateral', 'Multi-layered', 'Multi-tiered', 'Networked', 'Object-based', 'Open-architected', 'Open-source', 'Operative', 'Optimized', 'Optional', 'Organic', 'Organized', 'Persevering', 'Persistent', 'Phased', 'Polarised', 'Pre-emptive', 'Proactive', 'Profit-focused', 'Profound', 'Programmable', 'Progressive', 'Public-key', 'Quality-focused', 'Reactive', 'Realigned', 'Re-contextualized', 'Re-engineered', 'Reduced', 'Reverse-engineered', 'Right-sized', 'Robust', 'Seamless', 'Secured', 'Self-enabling', 'Sharable', 'Stand-alone', 'Streamlined', 'Switchable', 'Synchronised', 'Synergistic', 'Synergized', 'Team-oriented', 'Total', 'Triple-buffered', 'Universal', 'Up-sized', 'Upgradable', 'User-centric', 'User-friendly', 'Versatile', 'Virtual', 'Visionary', 'Vision-oriented'),
        array('24 hour', '24/7', '3rd generation', '4th generation', '5th generation', '6th generation', 'actuating', 'analyzing', 'assymetric', 'asynchronous', 'attitude-oriented', 'background', 'bandwidth-monitored', 'bi-directional', 'bifurcated', 'bottom-line', 'clear-thinking', 'client-driven', 'client-server', 'coherent', 'cohesive', 'composite', 'context-sensitive', 'contextually-based', 'content-based', 'dedicated', 'demand-driven', 'didactic', 'directional', 'discrete', 'disintermediate', 'dynamic', 'eco-centric', 'empowering', 'encompassing', 'even-keeled', 'executive', 'explicit', 'exuding', 'fault-tolerant', 'foreground', 'fresh-thinking', 'full-range', 'global', 'grid-enabled', 'heuristic', 'high-level', 'holistic', 'homogeneous', 'human-resource', 'hybrid', 'impactful', 'incremental', 'intangible', 'interactive', 'intermediate', 'leading edge', 'local', 'logistical', 'maximized', 'methodical', 'mission-critical', 'mobile', 'modular', 'motivating', 'multimedia', 'multi-state', 'multi-tasking', 'national', 'needs-based', 'neutral', 'next generation', 'non-volatile', 'object-oriented', 'optimal', 'optimizing', 'radical', 'real-time', 'reciprocal', 'regional', 'responsive', 'scalable', 'secondary', 'solution-oriented', 'stable', 'static', 'systematic', 'systemic', 'system-worthy', 'tangible', 'tertiary', 'transitional', 'uniform', 'upward-trending', 'user-facing', 'value-added', 'web-enabled', 'well-modulated', 'zero administration', 'zero defect', 'zero tolerance'),
        array('ability', 'access', 'adapter', 'algorithm', 'alliance', 'analyzer', 'application', 'approach', 'architecture', 'archive', 'artificial intelligence', 'array', 'attitude', 'benchmark', 'budgetary management', 'capability', 'capacity', 'challenge', 'circuit', 'collaboration', 'complexity', 'concept', 'conglomeration', 'contingency', 'core', 'customer loyalty', 'database', 'data-warehouse', 'definition', 'emulation', 'encoding', 'encryption', 'extranet', 'firmware', 'flexibility', 'focus group', 'forecast', 'frame', 'framework', 'function', 'functionalities', 'Graphic Interface', 'groupware', 'Graphical User Interface', 'hardware', 'help-desk', 'hierarchy', 'hub', 'implementation', 'info-mediaries', 'infrastructure', 'initiative', 'installation', 'instruction set', 'interface', 'internet solution', 'intranet', 'knowledge user', 'knowledge base', 'local area network', 'leverage', 'matrices', 'matrix', 'methodology', 'middleware', 'migration', 'model', 'moderator', 'monitoring', 'moratorium', 'neural-net', 'open architecture', 'open system', 'orchestration', 'paradigm', 'parallelism', 'policy', 'portal', 'pricing structure', 'process improvement', 'product', 'productivity', 'project', 'projection', 'protocol', 'secured line', 'service-desk', 'software', 'solution', 'standardization', 'strategy', 'structure', 'success', 'superstructure', 'support', 'synergy', 'system engine', 'task-force', 'throughput', 'time-frame', 'toolset', 'utilisation', 'website', 'workforce')
    );

    /**
     * Some bs phrase parts, wordlist from http://dack.com/web/bullshit.html
     *
     * @var array
     */
    protected static $bsParts = array(
        array('implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize'),
        array('clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich'),
        array('synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'web services', 'methodologies')
    );

    /**
     * Return a fake company name.
     *
     * @return string
     */
    public static function name()
    {
        $format = static::$formats[array_rand(static::$formats)];

        $parts = array();
        foreach ($format['parts'] as $function) {
            $parts[] = call_user_func($function);
        }

        return vsprintf($format['format'], $parts);
    }

    /**
     * Return a fake company name suffix.
     *
     * @return string
     */
    protected static function suffix()
    {
        return static::$suffixes[array_rand(static::$suffixes)];
    }

    /**
     * Generate a buzzword-laden catch phrase.
     *
     * @return string
     */
    public static function catchPhrase()
    {
        return
            static::$catchPhraseParts[0][array_rand(static::$catchPhraseParts[0])] . ' ' .
            static::$catchPhraseParts[1][array_rand(static::$catchPhraseParts[1])] . ' ' .
            static::$catchPhraseParts[2][array_rand(static::$catchPhraseParts[2])];
    }

    /**
     * When a straight answer won't do, BS to the rescue!
     *
     * @return string
     */
    public static function bs()
    {
        return
            static::$bsParts[0][array_rand(static::$bsParts[0])] . ' ' .
            static::$bsParts[1][array_rand(static::$bsParts[1])] . ' ' .
            static::$bsParts[2][array_rand(static::$bsParts[2])];
    }
}
